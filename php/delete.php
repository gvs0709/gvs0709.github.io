<?php
    require 'bd_connection.php';

    $stmt = $pdo->prepare('DELETE FROM faleconosco WHERE id = ?');
    $stmt->bindParam(1, $_POST["id"]);
    $stmt->execute();

    header('Location: ../crud.html');
?>