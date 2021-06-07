<?php

/**
 *"INSERT INTO tasks (
 *                      subject,
 *                      description,
 *                  )
 *                  VALUES (
 *                      ....
 *                  )";
 */

require_once("./dbconfig.php");


class TodoTable
{
    private $conn;
    private $tableName;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $connStr = sprintf("mysql:host=%s;dbname=%s", DBConfig::HOST, DBConfig::DB_NAME);

        try {
            $this->conn = new PDO($connStr, DBConfig::USERNAME, DBConfig::PASS);
            echo "Connected !";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function __destruct()
    {
        // close the database connection
        $this->conn = null;
    }

    public function insertRow($title, $description)
    {
        /** 
         * https://www.php.net/manual/en/pdostatement.bindparam.php
         * https://stackoverflow.com/questions/19751360/pdoparam-int-is-important-in-bindparam
         */
        $todoTask = array(
            ':title' => $title,
            ':description' => $description,
        );


        $sql = <<<EOSQL
            INSERT INTO $this->tableName(title, description) VALUES(:title,:description);
        EOSQL;

        $query = $this->conn->prepare($sql);

        try {
            $query->execute($todoTask);
            echo "Todo task inserted !";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}



$obj = new TodoTable("todoTable");
$obj->insertRow("Kitchen", "Clean kitchen");
