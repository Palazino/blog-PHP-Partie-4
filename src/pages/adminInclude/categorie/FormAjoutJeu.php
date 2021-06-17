<?php
        if(isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "admin"){
            if(isset($_GET["create"]) && $_GET["create"] == true){
                ?>
                <form action="../../src/pages/admin.php?choix=listeJeux" method="post">
                <tr>
                    
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le  jeu"></td><br>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le  developpeur"></td><br>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez l' l'éditeur"></td><br>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez la date de sortie"></td><br>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez l'adresse de cover"></td><br>
                    <td><input type="submit" value="Enregistrer le jeu"></td>
                </tr>
                </form>
                <?php
            }
        }
    ?>