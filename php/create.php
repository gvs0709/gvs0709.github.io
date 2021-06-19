<?php
    require 'bd_connection.php';
    
    $stmt = $pdo->prepare("INSERT INTO faleconosco (nome, sobrenome, email, menssagem) VALUES (?, ?, ?, ?);");
    $stmt->bindParam(1, $_POST["nome"]);
    $stmt->bindParam(2, $_POST["sobrenome"]);
    $stmt->bindParam(3, $_POST["email"]);
    $stmt->bindParam(4, $_POST["menssagem"]);
    $stmt->execute();

    header('Location: ../crud.html');
?>