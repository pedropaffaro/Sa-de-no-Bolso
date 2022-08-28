<?php
    try{
        $pdo = new PDO('mysql:host=143.106.241.3; dbname=cl200144; charset=utf8', 'cl200144', 'cl*novasenha28');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }