<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/jokes/db/db_connect.php";

    try{
        $sql = "DELETE FROM genre WHERE genre_id = :id";
        $s = $pdo -> prepare($sql);
        $s -> bindValue(":id", $_POST["id"]);
        $s -> execute();
    }
    catch (PDOException $e){
        $error  = "Error deleting genre.";
        include $_SERVER["DOCUMENT_ROOT"] . "/jokes/error/error.php";
        exit();
    }
?>