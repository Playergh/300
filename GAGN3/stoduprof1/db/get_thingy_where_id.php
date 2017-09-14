<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/db/db_connect.php";
    try{
        $sql = "SELECT id, text FROM autocomplete WHERE id = :id";
        $s = $pdo -> prepare($sql);
        $s -> bindValue(":id", $_POST["id"]);
        $s -> execute();
    }
    catch (PDOException $e){
        $error = "Error fetching thingy details." . $e -> getMessage();
        include $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/error/error.php";
        exit();
    }
    $row = $s -> fetch();
?>