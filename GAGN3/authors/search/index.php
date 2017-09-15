<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/karig/jokes/workers/search_authors.php'?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/karig/jokes/workers/html_special_chars.php'?>

<html>
    <head>
        <title>Search Authors</title>
    </head>
    <body>
        <h1>Search Engine</h1>
        <form action="" method="get">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <input type="hidden" name="action" value="search">
                <input type="submit" value="Search">
            </div>
        </form>
        <?php
            if($_GET['action']){
            foreach ($row as $r){
                echo $r['name'];
                echo " - ";
                echo $r['email'];
                echo "<br/>";
            }}
        ?>
    </body>
</html>