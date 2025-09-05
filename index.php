<?php
    // connexion bdd
    require "config/connexion.php";

    // tableau des clés pour le routeur
    $tabMenu = [
        "home" => "home.php",
        "presentation" => "presentation.php",
        "contact" => "contact.php"
    ];

    // routeur
    if(isset($_GET['action']))
    {
        if(array_key_exists($_GET['action'],$tabMenu))
        {
            $menu = $tabMenu[$_GET['action']];
        }else{
            header("LOCATION:404.php");
            exit();
        }
    }else{
        $menu = "home.php";
    }

?>
<!DOCTYPE html>
<html lang="en">
    <?php include("partials/head.php"); ?>

    <body>
        <?php include("partials/nav.php"); ?>
    
        <?php
            include("pages/".$menu);
            // include("pages/home.php");
            // aller copier à cet emplacement le contenu de home.php
        ?>
        <?php include("partials/footer.php"); ?>
    </body>
</html>