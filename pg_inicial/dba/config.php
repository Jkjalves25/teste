<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "@Jkjalves25";
$dbName = "formulario-aruanda";

$mysqli = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
try {
    //Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com banco de dados realizado com sucesso.";
} catch (PDOException $err) {
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}
    //Fim da conexão com o banco de dados utilizando PDO



?>