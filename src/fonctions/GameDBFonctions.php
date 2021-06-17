<?php
    // RECUPERER LES JEUX
    function getGame(){
        $bdd = dbAccess();
        $requete =$bdd->query("SELECT *
                                FROM jeux
                                INNER JOIN gamecategory ON gamecategory.gameCategoryId =jeux.gamecategoryId
                                INNER JOIN hardware ON hardware.hardId = jeux.consoleId") or die (print_r($requete->errorInfo(), TRUE));
        // Distribuer les données recue dans une variable tableau 
        while($donnéesJeux= $requete->fetch()){
        $listeJeux[] = $donnéesJeux;
        }
        return $listeJeux;

    }

    // CREER UN JEU
    function createGame($nom, $developpeur, $editeur,$datesortie,$cover,$console, $genre){
        // Ajouter un type d'article
        $bdd = dbAccess();
        $requete = $bdd->prepare("INSERT INTO jeux (nom,developpeur,editeur,dateDeSortie,cover)
                                     VALUES(?,?,?,?,?,?,?)")  or die(print_r($requete->errorInfo(), TRUE)); 
        $requete->execute(array());
        $requete->closeCursor();
    }
    

    // SUPPRIME LES JEUX
    function deletegame($game){
        $bdd =dbAccess();
        $requete=$bdd->prepare("DELETE FROM jeux WHERE gameId = ?");
        $requete->execute(array($game)) or die(print_r($requete->errorInfo(), TRUE));
    
    }
    