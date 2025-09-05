<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?action=home.php">Home</a></li>
            <li><a href="index.php?action=presentation.php">Présentation</a></li>
            <li><a href="index.php?action=contact.php">Contact</a></li>
        </ul>
    </nav>
    <?php
        if(isset($_GET['action']))
        {
            $menu = $_GET['action'];
        }else{
            $menu = "home.php";
        }

        include("pages/".$menu);
    ?>
</body>
</html>