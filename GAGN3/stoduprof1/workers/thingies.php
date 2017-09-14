<?php
    if (isset($_GET["add"])){
        $page_title = "New Thingy";
        $action = "addform";
        $name = "";
        $genre_id  = "";
        $button = "Add thingy";
        include "../autocomplete/form.php";
        exit();
    }

    if (isset($_GET["addform"])){
        include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/db/insert_thingy.php";
        header("Location: ../autocomplete/");
        exit();
    }

    if (isset($_POST["action"]) and $_POST["action"] == "Edit"){
        include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/db/get_thingy_where_id.php";

        $page_title = "Edit thingy";
        $action = "editform";
        $name = $row["text"];
        $id = $row["id"];
        $button = "Update thingy";
        include "../autocomplete/form.php";
        exit();
    }

    if (isset($_GET["editform"])){
        include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/db/delete_from_thingy";
        header("Location: ../autocomplete/");
        exit();
    }

    include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/db/get_thingy.php";

    foreach($result as $row){
        $thingies[] = array("id" => $row["id"], "name" => $row["name"]);
    }
?>