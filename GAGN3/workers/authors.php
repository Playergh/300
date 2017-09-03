<?php
    /*if (isset($_GET["add"])){
        $page_title = "New Genre";
        $action = "addform";
        $name = "";
        $genre_id = "";
        $button = "Add genre";
        include "../form/";
        exit();
    }

    if (isset($_GET["addform"])){
        include_once $_SERVER["DOCUMENT_ROOT"] . "/jokes/db/insert_author.php";
        header("Location: .");
        exit();
    }

    if (isset($_POST["action"]) and $_POST["action"] == "Edit"){
        include_once $_SERVER["DOCUMENT_ROOT"] . "/jokes/db/get_author_where_id.php";

        $page_title = "Edit genre";
        $action = "editform";
        $name = $row["name"];
        $genre_id = $row["genre_id"];
        $button = "Update genre";
        include "../form/";
        exit();
    }

    if (isset($_GET["editform"])){
        include_once $_SERVER["DOCUMENT_ROOT"] . "/jokes/db/update_authors.php";

        header ("Location: .");
        exit();
    }

    if (isset($_POST["action"]) and $_POST["action"] == "Delete"){
        include_once $_SERVER["DOCUMENT_ROOT"] . "jokes/db/delete_from_jokegenre.php";
        include_once $_SERVER["DOCUMENT_ROOT"] . "jokes/db/delete_from_author.php";

        header("Location: .");
        exit();
    }
*/
    include_once $_SERVER['DOCUMENT_ROOT'] . '/jokes/db/get_author.php';
    var_dump($result);

    foreach ($result as $row){
        $authors[] = array('id' => $row['id'], 'name' => $row['name']);
    }

?>