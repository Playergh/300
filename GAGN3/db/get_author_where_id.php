<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/jokes/db/db_connect.php';
    try{
        $sql = 'SELECT author_id, name FROM authors WHERE author_id = :id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':id', $_POST['id']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error fetching author details.' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/jokes/error/error.php';
        exit();
    }
    $row = $s->fetch();
?>