<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/jokes/workers/genres.php"; ?>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/jokes/workers/html_special_chars.php"; ?>

<html>
    <head>
        <meta charset = "utf-8" />
        <title> Manage Genres </title>
    </head>
    <body>
        <h1>Manage Genres</h1>
        <p><a href = "../workers/genres.php?add">Add new genre</a></p>
        <ul>
            <?php foreach ($name as $genre): ?>
                <li>
                    <form action = "" method = "post">
                        <div>
                            <?php print html ($genre["name"]); ?>
                            <input type = "hidden" name = "id" value = "<?php print $genre["id"]; ?>" />
                            <input type = "submit" name = "action" value = "Edit" />
                            <input type = "submit" name = "action" value = "Delete" />
                        </div>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <p><a href = "..">Return to Joke Central home</a></p>
    </body>
</html>