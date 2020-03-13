<?php

$serverName = "db-foot";
$dbName = "wanafoot";
$port = 3306;
$userName = "wanadev";
$password = "secret";

try
{
    $connection = new PDO("mysql:host=$serverName;port=$port;dbname=$dbName;charset=utf8", $userName, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // sql to create table
    $sqlUser = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(255),
    creation_date TIMESTAMP
    )";

    $sqlMessage = "CREATE TABLE message (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    id_user INT(6) NOT NULL,
    content VARCHAR(255),
    password VARCHAR(255),
    creation_date TIMESTAMP,
    edition_date DATE 
    )";
    // use exec() because no results are returned
    $connection->exec($sqlUser);
    $connection->exec($sqlMessage);
    echo "Table users created successfully";

}

catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
echo 'bdd ok';

?>