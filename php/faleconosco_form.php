<?php
    $pdo = new PDO('mysql:host=localhost;dbname=trabalho_final_dev_web;charset=utf8', 'root', '');

    /*$nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email =  $_POST["email"];
    $menssagem =  $_POST["menssagem"];*/
    
    $stmt = $pdo->prepare("INSERT INTO faleconosco (nome, sobrenome, email, menssagem) VALUES (?, ?, ?, ?);");
    $stmt->bindParam(1, $_POST["nome"]);
    $stmt->bindParam(2, $_POST["sobrenome"]);
    $stmt->bindParam(3, $_POST["email"]);
    $stmt->bindParam(4, $_POST["menssagem"]);
    $stmt->execute();

    header('Location: ../faleconosco.html');
?>