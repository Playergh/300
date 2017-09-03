<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/jokes/db/db_connect.php';
    try{
        $sql = 'UPDATE genres SET name = :name WHERE genre_id = :id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':id', $_POST['id']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error updating submitted genre.';
        include $_SERVER['DOCUMENT_ROOT'] . '/jokes/error/error.php';
        exit();
    }
?>