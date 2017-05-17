<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once "books_array.php";
            
            $count = 1;
            
            foreach ($books as $key)
            {
                echo "{$count}. {$key["name"]}<br/>";
                echo "<img src='imgs/{$key["img"]}' width='200' height='200'/><br/>";
                echo "{$key["description"]}<br/>{$key["author"]}<br/>{$key["prise"]}<br/><hr>";
            }
        ?>
    </body>
</html>