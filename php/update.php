<?php
    require 'bd_connection.php';

    $updateOp = "UPDATE faleconosco";
    $set = " SET ";
    $target = " WHERE id = " . $_POST["id"];

    if(strlen($_POST["nome"]) > 0){
        $set = $set . "nome = " . "\"" . $_POST["nome"] . "\"" . ", ";
    }

    if(strlen($_POST["sobrenome"]) > 0){
        $set = $set . "sobrenome = " . "\"" . $_POST["sobrenome"] . "\"" . ", ";
    }

    if(strlen($_POST["email"]) > 0){
        $set = $set . "email = " . "\"" . $_POST["email"] . "\"";
    }

    $set = chop($set, ", ");

    $stmt = $pdo->prepare($updateOp . $set . $target);
    $stmt->execute();

    header('Location: ../crud.html');
?>