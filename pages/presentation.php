<h1>Présentation</h1>

<h2>Regex PHP|JS</h2>
<?php
    if(preg_match("#PHP|JS#","Je fais du python"))
    {
        echo "ok";
    }else{
        echo "il n'y a pas PHP";
    }
?>

<h2>REGEX début / fin de chaîne</h2>
<?php
    if(preg_match("#Bonjour!$#","les webdev! Bonjour!"))
    {
        echo "ok";
    }else{
        echo "il n'y a pas de bonjour au début de la phrase";
    }
?>

<h2>REGEX les classes de caractères</h2>
<?php
    if(preg_match("#gr[iao]s#","gris"))
    {
        echo "ok";
    }else{
        echo "ni gris, ni gras, ni gros";
    }
?>

<h2>REGEX intervalles</h2>
<?php
    if(preg_match("#<h[1-6]>#","<h7>Bonjour la classe</h7>"))
    {
        echo "ok";
    }else{
        echo "h1 jusque h6";
    }
    // [a-zA-Z0-9]
?>

<h2>REGEX négation intervalles</h2>
<?php
    if(preg_match("#<h[^a-z]>#","<ha>Bonjour la classe</ha>"))
    {
        echo "ok";
    }else{
        echo "h1 jusque h6";
    }
    // [^a-zA-Z0-9]
?>