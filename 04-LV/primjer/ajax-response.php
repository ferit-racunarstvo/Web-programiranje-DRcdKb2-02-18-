<?php

if (isset($_POST["name"])) {
    echo <<<text
    <span>This is ajax response ! </span>
    <div class="alert alert-primary" role="alert">
        <p>Hi {$_POST["name"]}</p>
    </div>
    text;
}
