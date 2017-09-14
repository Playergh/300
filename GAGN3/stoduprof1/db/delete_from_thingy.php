<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/db/db_connect.php";

    try{
        $sql = "DELETE FROM autocomplete WHERE id = :id";
        $s = $pdo -> prepare($sql);
        $s -> bindValue(":id", $_POST["id"]);
        $s -> execute();
    }
    catch (PDOException $e){
        $error = "Error deleting genre.";
        include $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/jokes/error/error.php";
        exit();
    }
?>