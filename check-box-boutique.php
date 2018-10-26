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
            echo "<input type='checkbox' name='".$elem."'";
            if (array_key_exists($elem, $_POST))
                echo" checked='checked'";
            echo "> ".$elem."<br/>";
        }
    }
    echo "<input type='submit' name = 'submit' value='Valider' />";
    echo "</form>";
    echo "</aside>";
    ?>


    <?PHP

    $bdd = unserialize(file_get_contents("bdd/serialized"));
    if (isset($bdd) && $bdd != NULL)
    {
        foreach ($bdd as $key=>$value)
        {
            foreach ($_POST as $pkey => $pvalue) {
                if ($pkey == $value[2])
                    $cat1[] = $bdd[$key];
            }
        }
        if (isset ($cat1) && $cat1 != NULL)
        {
            foreach ($cat1 as $key2=>$value2)
            {
                foreach ($_POST as $pkey2=>$pvalue2)
                {
                    if ($pkey2 == $value2[3])
                        $cat2[] = $cat1[$key2];
                }
            }
        }
    }
    if (isset($cat2) && $cat2 != NULL)
    {
        echo "<table id='boutique-pirate'>";
        foreach ($cat2 as $pirate)
        {
            echo "<tr><td class='nom-pirate'>".$pirate[1]."</td></tr>";
            echo "<tr><td><img src='".$pirate[9]."'/ style='width:100%;'></td><tr/>";
            echo "<tr><td class='acheter-pirate'><a href='adopte-pirate.php?pirate=".$pirate[0]."'>J'adopte ce pirate !</a></td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "<p>Désolé, nous n'avons pas de Pirate correspondant à vos critères pour le moment !</p>";
    }

    ?>
</div>
</body>
<footer>
</footer>
</html>