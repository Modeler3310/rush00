<?php  include("header_connexion.php"); ?>
<!DOCTYPE html>
<html>
<body>
<div id="content">
    <br/>
    <h2>Tortuga</h2>

    <?PHP
    $bdd = unserialize(file_get_contents("bdd/serialized"));
    $flag = 0;
    $id = $_GET['pirate'] - 1;
    foreach ($bdd as $num_pirate)
    {
        if ($num_pirate[0] == $_GET['pirate'])
            $flag = 1;
    }
    if (isset($_GET['pirate']) && $_GET['pirate'] != NULL &&
        $_GET['pirate'] >= 0 && is_numeric($_GET['pirate']) && $flag == 1)
    {
        echo "<a href='boutique.php' class='admin-users'>Revenir à la liste</a><br/><br/>";
        echo "<table id='page-pirate'>";
        echo "<tr><td class='nom-pirate'>".$bdd[$_GET[$id]][1]."</td><tr/>";
        echo "<tr><td><img src='".$bdd[$_GET[$id]][9]."'/ style='width:100%;'></td><tr/>";
        echo "<tr><td>Catégories : ".$bdd[$_GET[$id]][2].", ".$bdd[$_GET['pirate']][3]."</td><tr/>";
        echo "<tr><td>Taille : ".$bdd[$_GET[$id]][7]."</td><tr/>";
        echo "<tr><td>Poids : ".$bdd[$_GET[$id]][8]."</td><tr/>";
        echo "<tr><td>Prix : ".$bdd[$_GET[$id]][6]."</td><tr/>";
        echo "<tr><td><a href='add-panier.php?pirate=".$bdd[$id][0]."'>Je le mets dans mon panier</a></td><tr/>";
        echo "</table>";
    }
    else {
        echo "<meta http-equiv='refresh' content='0,url=boutique.php'>";
        exit();
    }
    ?>
</div>
</body>
<footer>
</footer>
</html>
