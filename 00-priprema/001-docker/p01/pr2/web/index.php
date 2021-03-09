<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?= "hello world" ?>
    </h1>

    <?php
    $data = file_get_contents("http://api");
    $obj = json_decode($data);
    $motors = $obj->motors;
    ?>

    <?php foreach($motors as $motor):  ?>
        <li>
            <?=$motor ?>
        </li>
    <?php endforeach ?>
</body>
</html>