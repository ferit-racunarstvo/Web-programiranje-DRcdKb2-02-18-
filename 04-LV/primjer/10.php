<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primjer 10</title>
</head>

<body>

    <!-- 
        FILTER LIST - https://www.php.net/manual/en/filter.filters.validate.php
     -->

    <span>Primjer 1: </span>
    <?php
    $int = 20;

    if (filter_var($int, FILTER_VALIDATE_INT)) {
        echo "Variable is integer";
    } else {
        echo "Variable is not integer";
    }

    ?>

    <br>
    <span>Primjer 2: </span>

    <?php
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)) {
        echo "Variable is integer";
    } else {
        echo "Variable is not integer";
    }
    ?>

    <br>
    <span>Primjer 3: </span>

    <?php
    $ip = "172.16.254.1";

    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "IP address is ok";
    } else {
        echo "Variable is not integer";
    }
    ?>

    <br>
    <span>Primjer 4: </span>

    <?php
    $email = "donlule@@ferit.hr";

    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

    if ($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "The $email is ok";
    } else {
        echo "The $email is not a valid";
    }
    ?>

</body>

</html>