<?php
    require "../config/connexion.php";


    $tabMenu = [
        "home" => "home.php",
        "presentation" => "presentation.php",
        "contact" => "contact.php"
    ];

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
        ?>
     
        <?php include("partials/footer.php"); ?>
    </body>
</html>