<h1>Accueil</h1>

<?php
    $req = $bdd->query("SELECT * FROM products");
    $donReq= $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    foreach($donReq as $product)
    {
        echo "<div>".$product['nom']."</div>";
    }
?>