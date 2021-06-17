<?php
    // Je conditionne l'accès à ces fonctions aux seuls admin
    if(isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "admin"){
        // Gère les ajouts de nouveau matériel
        if(isset($_POST["hardware"]) && !empty($_POST["hardware"])){
            $console = htmlspecialchars($_POST["hardware"]) ;
            addHardCategorie($console);
        }
        // EFFACER UNE CONSOLE
        if(isset($_GET["delete"]) && $_GET["delete"] ==true){
            $hardId = htmlspecialchars($_GET["value"]["hardId"]);
            $intHardId =intval($hardId);
            deleteHardcategorie($intHardId);
        }
    }
    // Je récupère la liste des catégories
    $listHardCategorie = getHardCategorie();
?>

<table class="mlr-a mt-3 p-1">
    <thead>
        <tr>
            <th colspan="2">Liste Des Hardwares</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nom de la catégorie</td>
            <td>Supprimer</td>
        </tr>
    <?php
        foreach($listHardCategorie as $value):
        ?>
            <tr>
                <td><?= $value["console"]?></td>
                <td class="ta-c tc-r"><a href="../../src/pages/admin.php?choix=listeCategorie&delete=true&value=<?= $value["hardId"]?>"><i class="far fa-plus-square"></a></td>
            </tr>
        <?php
        endforeach;
    ?>
    <tr>
        <td>Ajouter un hardware</td>
        <td class="ta-c tc-g"><a href="../../src/pages/admin.php?choix=listeCategorie&create=true"><i class="far fa-plus-square"></i></a></td>
    </tr>
    <?php
        if(isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "admin"){
            if(isset($_GET["create"]) && $_GET["create"] == true){
                ?>
                <form action="../../src/pages/admin.php?choix=listeCategorie" method="post">
                <tr>
                    <td>Nom du hardware à Ajouter</td>
                    <td class="ta-c tc-g"><input type="text" name="hardware" placeholder="entrez le nom du hard"></td>
                    <td><input type="submit" value="Ajouter hardware"></td>
                </tr>
                </form>
                <?php
            }
        }
    ?>
    </tbody>
</table>