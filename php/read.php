<?php
    require 'bd_connection.php';

    $selectOp = "SELECT ";
    $wildCard = "*";
    $fromStatement = " FROM faleconosco";
    $target = " WHERE ";
    $strID = "";
    $strNome = "";
    $strSobrenome = "";
    $strEmail = "";
    $strMenssagem = "";

    if($_POST["ck_box_id"]){
        $wildCard = chop($wildCard, "*");
        $wildCard = $wildCard . "id, ";
        $strID = "ID: ";
    }

    if($_POST["ck_box_nome"]){
        $wildCard = chop($wildCard, "*");
        $wildCard = $wildCard . "nome, ";
        $strNome = "NOME: ";
    }

    if($_POST["ck_box_sobrenome"]){
        $wildCard = chop($wildCard, "*");
        $wildCard = $wildCard . "sobrenome, ";
        $strSobrenome = "SOBRENOME: ";
    }

    if($_POST["ck_box_email"]){
        $wildCard = chop($wildCard, "*");
        $wildCard = $wildCard . "email, ";
        $strEmail = "EMAIL: ";
    }

    if($_POST["ck_box_menssagem"]){
        $wildCard = chop($wildCard, "*");
        $wildCard = $wildCard . "menssagem";
        $strMenssagem = "MENSSAGEM: ";
    }

    $wildCard = chop($wildCard, ", ");

    if(strlen($wildCard) == 1){
        $strID = "ID: ";
        $strNome = "NOME: ";
        $strSobrenome = "SOBRENOME: ";
        $strEmail = "EMAIL: ";
        $strMenssagem = "MENSSAGEM: ";
    }

    if($_POST["id"] != NULL){
        $target = $target . "id = " . $_POST["id"] . " ";
    }

    if(($_POST["nome"] != NULL) && ($_POST["id"] == NULL)){
        $target = $target . "nome = " . "\"" . $_POST["nome"] . "\"" . " ";
    }

    if(($_POST["sobrenome"] != NULL) && ($_POST["id"] == NULL) && ($_POST["nome"] == NULL)){
        $target = $target . "sobrenome = ". "\"" . $_POST["sobrenome"] . "\"" . " ";
    }

    if(($_POST["id"] == NULL) && ($_POST["nome"] == NULL) && ($_POST["sobrenome"] == NULL)){ //Caso não tenha nada para procurar mostra o banco todo
        $target = "";
    }
    
    $stmt = $pdo->prepare($selectOp . $wildCard . $fromStatement . $target);
    $stmt->execute();

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $strID . $linha['id'];

        if(strlen($strID) > 0){
            echo " | ";
        }

        echo $strNome . $linha['nome'];

        if(strlen($strNome) > 0){
            echo " | ";
        }

        echo $strSobrenome . $linha['sobrenome'];

        if(strlen($strSobrenome) > 0){
            echo " | ";
        }

        echo $strEmail . $linha['email'];

        if(strlen($strEmail) > 0){
            echo " | ";
        }

        echo $strMenssagem . $linha['menssagem'];
        echo "<br>";
        echo "<br>";
    }
?>