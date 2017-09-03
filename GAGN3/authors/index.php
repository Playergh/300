<?php include_once $_SERVER["DOCUMENT_ROOT"] . "nemendur/karig/jokes/workers/authors.php"; ?>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "nemendur/karig/jokes/workers/html_special_chars.php"; ?>

<html>
    <head>
        <meta charset = "utf-8" />
        <title> Manage Authors </title>
    </head>
    <body>
        <h1>Manage Authors</h1>
        <p><a href = "../workers/authors.php?add">Add new author</a></p>
        <ul>
            <?php foreach ($authors as $author): ?>
                <li>
                    <form action = "" method = "post">
                        <div>
                            <?php print html ($author["name"]); ?>
                            <input type = "hidden" name = "id" value = "<?php print $author["id"]; ?>" />
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