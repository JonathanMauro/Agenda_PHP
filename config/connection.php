<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "bandaonze20";

    try {
        $conn = new PDO("mysql:host=$host; dbname=$dbname", $user,$pass);
        //Ativar o modo de erros

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }catch(PDOException $e) {
        //erro na conexão
        $erro = $e->getMessage();
        echo "Error:  $erro";
    }