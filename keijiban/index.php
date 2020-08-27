<!DOCTYPE html>
<html lang="ja">

    <head>
    <meta charset="UTF-8">
        <title>4each 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
    
        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keihiban");
        
        while($row = $stmt->fetch()){
            echo $row['handlename'];
            echo $row['title'];
            echo $row['comments'];
        }
        
        ?>
    </body>
</html>