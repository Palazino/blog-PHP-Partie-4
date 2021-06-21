<!-- FORMULAIRE D'AJOUT DE JEU-->  
<h2 class="ta-c mt-5">Formulaire d'ajout de jeu</h2><br><br>
        <form action="" method="post">
            <tr>
                    <td>Nom du jeu</td>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le nom du hard"></td><br><br>
                    <td>Nom du jeu</td>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le nom du hard"></td><br><br>
                    <td>Nom du jeu</td>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le nom du hard"></td><br><br>
                    <td>Nom du jeu</td>
                    <td class="ta-c tc-g"><input type="text" name="nomJeu" placeholder="entrez le nom du hard"></td><br><br><br><br>
                    <!-- LISTE DE CHOIX (select et option) pour les genres de jeu-->
                <?php
                
                // JE vais recherche le genre de jeu dans la fonction getgenre()
                    $genrejeu = getGenreGame();
                // JE vais recherche les console du jeu dans la fonction getconsole()
                    $consolejeu = getGenreConsole();
                ?>
                    <select name="GENRESELECT">
                <?php 
                    foreach($genrejeu as $v1){
                ?>
                        <option><?php echo($v1['genre']);?></option>
                <?php
                    }
                ?>
                    </select><br>
                    <!-- LISTE DE CHOIX (select et option) pour les types de plateformes du jeu-->
                    <select name="PLATEFORMESELECT">
                    <?php 
                    foreach($consolejeu as $v1){
                ?>
                        <option><?php echo($v1['console']);?></option>
                <?php
                    }
                ?>
                    </select><br><br>
                    <!--BOUTON D'ENVOI DES DONNES DANS LE $_GET POUR LES PLACER DANS LA BASE DE DONNEES VIA lA FONCTION CREATEGAME-->
                    <td><input type="submit" value="Enregistrer le jeu"></td>
            </tr>
        </form>

    
                
            
