<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/jokes/db/db_connect.php';
    try{
        $sql = 'SELECT genre_id, name FROM genre WHERE genre_id = :id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':id', $_POST['id']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error fetching genre details.' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/jokes/error/error.php';
        exit();
    }
    $row = $s->fetch();
?>