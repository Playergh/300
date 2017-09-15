<?php

    if (isset($_GET['action']) && $_GET['action'] == "search"){


        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/karig/jokes/db/db_connect.php';

        try{
            $sql = 'CALL search_author(:name)';
            $s = $pdo->prepare($sql);
            $s->bindValue(':name', $_GET['name']);
            $s->execute();
        }
        catch (PDOException $e){
            $error = 'Error fetching author details.' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/karig/jokes/error/error.php';
            exit();
        }


        $row = $s->fetchALL();


    }
?>