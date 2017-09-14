<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/workers/thingies.php"; ?>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/karig/stoduprof1/workers/html_special_chars.php"; ?>

<html>
    <head>
        <meta charset = "utf8" />
        <title>Stöðupróf</title>
    </head>
    <body>
        <h1>Manage thingies</h1>
        <p><a href = "../workers/thingies.php?add">Add new thingy</a></p>
        <ul>
            <?php foreach ($thingies as $thingy): ?>
                <li>
                    <form>
                        <div>
                            <?php print html ($thingy["text"]); ?>
                            <input type = "hidden" name = "id" value = "<?php print $thingy["id"]; ?>" />
                            <input type = "submit" name = "action" value = "Edit" />
                            <input type = "submit" name = "action" value = "Delete" />
                        </div>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>