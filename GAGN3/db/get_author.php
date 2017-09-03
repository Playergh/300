<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/jokes/db/db_connect.php';
    try{
        $result = $pdo->query('SELECT author_id, name FROM authors');
    }
    catch (PDOException $e){
        $error = 'Error fetching author details.';
        include $_SERVER['DOCUMENT_ROOT'] . 'nemendur/karig/jokes/error/error.php';
        exit();
    }
?>