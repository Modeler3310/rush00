<?php  include("header_connexion.php"); ?>
<!DOCTYPE html>
<html>
<body>
<div id="content">
    <br/>

    <?PHP
    $path = "ship";
    $file = $path."/categories";
    $unserialized = unserialize(file_get_contents($file));
    echo "<h2>Boutique</h2>";
    echo "<aside>";
    echo "<p>Catégories :</p>";
    echo "<form method='post' action='check-box-boutique.php'>";
    foreach ($unserialized as $key=>$value)
    {
        foreach ($value as $elem)
        {
            echo "<input type='checkbox' name='".$elem."' checked='checked'> ".$elem."<br/>";
        }
    }
    echo "<input type='submit' name = 'submit' value='Valider' />";
    echo "</form>";
    echo "</aside>";
    ?>

    <?PHP

    $bdd = unserialize(file_get_contents("bdd/serialized"));
    // print_r ($bdd);
    echo "<table id='boutique-pirate'>";
    foreach ($bdd as $pirate)
    {
        echo "<tr><td class='nom-pirate'>".$pirate[1]."</td></tr>";
        echo "<tr><td><img src='".$pirate[1]."'/ style='width:100%;'></td><tr/>";
        echo "<tr><td class='acheter-pirate'><a href='adopte-pirate.php?pirate=".$pirate[0]."'>J'adopte ce super pirate !</a></td></tr>";
    }
    echo "</table>";

    ?>
</div>
</body>
<footer>
</footer>
</html>
