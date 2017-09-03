<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/jokes/workers/html_special_chars.php"; ?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <title><?php print html($page_title); ?></title>
    </head>
    <body>
        <h1><?php print html($page_title); ?></h1>
        <form action = "?<?php print html ($action); ?>" method = "post">
            <div>
                <label for = "name">Name: <input type = "text" name = "name" id = "name" value = "<?php print html($name); ?>"></label>
            </div>
            <div>
                <input type = "hidden" name = "id" value = "<?php print html($id); ?>">
                <input type = "submit" value = "<?php print html($button); ?>">
            </div>
        </form>
    </body>
</html>