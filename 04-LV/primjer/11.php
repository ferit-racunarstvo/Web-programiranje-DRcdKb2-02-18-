<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primjer 11</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <?php if (isset($_SESSION["firstname"])) : ?>

        <div class="alert alert-primary" role="alert">
            <p>Hi <?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"] ?></p>
        </div>

    <?php endif; ?>


    <?php
    $_SESSION["firstname"] = "Don";
    $_SESSION["lastname"] = "Lule";
    ?>

</body>

</html>