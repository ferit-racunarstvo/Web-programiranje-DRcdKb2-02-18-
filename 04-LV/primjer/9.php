<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primjer 9</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <!-- Primjer 1 - GET Request -->
    <div class="container">
        <?php
        if (isset($_GET["name"])) {
            echo <<<text
            <div class="alert alert-primary" role="alert">
                <p>Hi {$_GET["name"]}</p>
            </div>
            text;
        }
        ?>

        <div class="form-group">
            <p class="text-muted">Example 1 - GET Request</p>

            <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <label for="inputName">Whats your name:</label>
                <input type="text" name="name" id="name">
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
    <!-- Primjer 1 - GET Request  END -->


    <!-- Primjer 2 - POST request -->
    <div class="container">
        <?php
        if (isset($_POST["name"])) {
            echo <<<text
            <div class="alert alert-primary" role="alert">
                <p>Hi {$_POST["name"]}</p>
            </div>
            text;
        }
        ?>

        <div class="form-group">
            <p class="text-muted">Example 2 - POST Request</p>

            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <label for="inputName">Whats your name:</label>
                <input type="text" name="name" id="name">
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
    <!-- Primjer 2 - POST Request END -->

    <!-- Primjer 3 - POST request using Ajax -->
    <div class="container">
        <div class="form-group ">
            <p class="text-muted">Example 3 - POST Request koristeći XMLHttpRequest objekt</p>

            <div class="my-custom-form">
                <label for="name">Whats your name: </label>
                <input type="text" name="name" id="my-custom-name" value="" placeholder="My custom input">
                <button type="submit" class="btn btn-primary" id="btn-submit">Submit Button</button>
            </div>

            <div class="result"></div>
        </div>

        <script>
            const button = document.querySelector("#btn-submit");
            const input = document.querySelector("#my-custom-name");

            button.addEventListener("click", event => {

                const xhttp = new XMLHttpRequest();

                xhttp.open("POST", "./ajax-response.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(`name=${input.value}`);

                xhttp.onreadystatechange = function() {
                    if (this.readyState = 4 && this.status == 200) {
                        document.querySelector(".result").innerHTML = this.responseText;
                    }
                };
            });
        </script>

    </div>
    <!-- Primjer 3 - POST request koristeći XMLHttpRequest objekt -->


</body>

</html>