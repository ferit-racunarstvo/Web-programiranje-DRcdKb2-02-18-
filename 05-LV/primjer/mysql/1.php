<?php

require_once("./dbconfig.php");

try {
    /**
     * https://www.php.net/manual/en/class.pdo.php
     */
    $conn = new PDO(
        "mysql:host=" . DBConfig::HOST . ";dbname=" . DBConfig::DB_NAME,
        DBConfig::USERNAME,
        DBConfig::PASS
    );
    echo "Connected !";
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Close connection
unset($conn);
