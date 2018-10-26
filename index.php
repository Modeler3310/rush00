<?PHP
session_start()
//include ("install.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Tobago-Shop</title>
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <meta name="google" content="notranslate"/>
</head>

<body>
<div id="head">
    <a href="index.php"><img src="img/logo.jpg"/></a>
    <a href="index.php"><h1>Tobago-Shop</h1></a>
</div>


<div id="menu">
    <ul>
        <li><a href="qui-sommes-nous.php">Qui sommes nous ?</a></li>
        <li><a href="boutique.php">Boutique</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php
        $logg
        if ($_SESSION['logged_on_user'] != " ")
        {
            echo"<li><a href='mon_compte.php'>Mon Compte</a></li>";
            echo"<li><a href='deconnexion.php'>Deconnexion</a></li>";
        }
        else
        {
            echo"<li><a href='inscription.php'>Inscription</a></li>";
            echo"<li><a href='connexion.php'>Connexion</a></li>";
        }
        ?>

        <li><a href="panier.php">Panier <?php
                if (!$_SESSION['nb_articles'])
                    $_SESSION['nb_articles'] = 0;
                echo "(".$_SESSION['nb_articles'].")";?></a></li>

        <?php
        if ($_SESSION['logged_on_user'] == "admin")
        {
            echo"<li><a href='admin/admin.php'>Admin</a></li>";
        }
        ?>
    </ul>
</div>

<div id="content">

    <br/>
    <a href="boutique.php"><h3>Cliquez ici pour visiter notre Boutique de Super Mega Pirate!!</h3></a>

    <p>PIRAAAAAAATESS</p>

    <a href="boutique.php"><img src="img/logo.jpg" title="Achetez-moi"/></a>

    <p>NAVIRE A L'HORIZON!!!!</p>

    <a href="boutique.php"><img src="img/logo.jpg" title="Achetez-moi"/></a>

    <p>CANON !!! FEU!!!!</p>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</div>

</body>

<footer>

</footer>
</html>
