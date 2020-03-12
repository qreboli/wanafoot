<?php
try
{
    $bdd = new PDO('mysql:host=db-foot;port=3306;dbname=wanafoot;charset=utf8', 'wanadev', 'secret');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
echo 'bdd ok'
?>