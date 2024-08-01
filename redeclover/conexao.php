<?php

$hostname = "localhost";
$database = "db_clover";
$usuario = "root";
$senha = "";

// $mysqli = new mysqli($hostname, $usuario, $senha, $database);
// if ($mysqli->connect_errno) {
//     echo "Falha ao conectar (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }

$mysqli = new PDO('mysql:host=' . $hostname . ';dbname='. $database .';charset=utf8', $usuario, $senha);

// function pdo_connect_mysql()
// {
//     $DATABASE = "db_clover";
//     $HOST = "localhost"; //LOCAL DO SERVIDOR ( PODE COLOCAR O IP DO SERVIDOR DO SITE POR EXEMPLO)
//     $USER = "root";
//     $PASS = "";
//     $OPTIONS = [ // variável $OPTIONS irá receber a classe PDO
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//     ];
//     // $pdo variável que irá receber o objeto de conexão
//     //new PDO (SGBD HOST; BANCO configurações, USUÁRIO, SENHA, OPÇÕES)
//     // Classe PDO com os parametros de conexão
//     try // try catch -> tratamento de erros
//     {
//         return new PDO("mysql:host=" . $HOST . ';dbname=' . $DATABASE . ';charset=utf8', $USER, $PASS, $OPTIONS);
//     } catch (PDOException $e) {
//         echo $e->getMessage() . "</p>";
//         die();
//     }
// }