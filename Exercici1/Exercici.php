<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nombres = array(0,3,5,2,8);

        foreach($nombres as $nombre):
            echo $nombre . "<br>";
        endforeach;

    ?>
</body>
</html>