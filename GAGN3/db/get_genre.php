<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/jokes/db/db_connect.php';
    try{
        $result = $pdo->query('SELECT genre_id, name FROM genre');
    }
    catch (PDOException $e){
        $error = 'Error fetching genre details.';
        include $_SERVER['DOCUMENT_ROOT'] . '/jokes/error/error.php';
        exit();
    }
?>