<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/db/db_connect.php";

    try{
        $sql = "UPDATE autocomplete SET text = :text WHERE id = :id";
        $s = $pdo -> prepare($sql);
        $s -> bindValue(":text", $_POST["text"]);
        $s -> bindValue(":id", $_POST8["id"]);
        $s -> execute();
    }
    catch (PDOException $e){
        $error = "Error updating submitted thingy";
        include $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/error/error.php";
        exit();
    }
?>