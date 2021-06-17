<?php
    // Je conditionne l'accès à ces fonctions aux seuls admin
    if(isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "admin"){
        // Gère les ajouts de nouveau jeux
        
    }
        // PLACE LES JEUX DANS LE TABLEAU $listGame
        $listGame = getGame();
        
    ?>
    <!-- BOUTON AJOUT DE JEU-->
    <a href="../../src/pages/admin.php?choix=listeJeux&create=true">
            <input type="button" value="AJOUTER JEU"/>
    </a>

    <table class="mlr-a mt-3 p-1">
    <thead>
        <tr>
            <th colspan="2">Liste Des jeux</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nom du jeu</td>
            <td>Devellopeur</td>
            <td>Editeur</td>
            <td>Date de sortie</td>
            <td>Cover</td>
            <td>Console</td>
            <td>Genre</td>
            <td>Supprimer</td>
        </tr>
    <?php
   
    // LECTURE DU TABLEAU $listGame
        foreach($listGame as $value){
        ?>
            <tr>
            <tr>
                <td><?= $value["nom"]?></td>
                <td><?= $value["developpeur"]?></td>
                <td><?= $value["editeur"]?></td>
                <td><?= $value["dateDeSortie"]?></td>
                <td><?= $value["cover"]?></td>
                <td><?= $value["console"]?></td>
                <td><?= $value["genre"]?></td>
                <td class="ta-c tc-r"><a href="../../src/pages/admin.php?choix=listeJeux&create=true&value=<?= $value["gameId"]?>"><i class="far fa-plus-square"></a></td>
            </tr>
            </tr>
        <?php
        }
    ?>
    <?php
        if(isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "admin"){
            if(isset($_GET["create"]) && $_GET["create"] == true){
                ?>
                <form action="../../src/pages/admin.php?choix=listeJeux" method="post">
                <tr>
                    <td>Nom du jeu</td>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le nom du hard"></td><br>
                    <td>Nom du jeu</td>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le nom du hard"></td><br>
                    <td>Nom du jeu</td>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le nom du hard"></td><br>
                    <td>Nom du jeu</td>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le nom du hard"></td>
                    <td><input type="submit" value="Enregistrer le jeu"></td>
                </tr>
                </form>
                <?php
            }
        }
    ?>
    </tbody>
</table>