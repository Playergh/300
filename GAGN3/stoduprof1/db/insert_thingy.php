<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/db/db_connect.php";
    try{
        $sql = "INSERT INTO autocomplete SET text = :text";
        $s = $pdo -> prepare($sql);
        $s -> bindValue(":text", $_POST["text"]);
        $s -> execute();
    }
    catch (PDOException $e){
        $error = "Error adding submitted thingy.";
        include $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/error/error.php";
        exit();
    }
?>