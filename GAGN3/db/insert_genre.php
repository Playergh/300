<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/jokes/db/db_connect.php';
    try{
        $sql = 'INSERT INTO genres SET name = :name';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error adding submitted genre.';
        include $_SERVER['DOCUMENT_ROOT'] . '/jokes/error/error.php';
        exit();
    }
?>