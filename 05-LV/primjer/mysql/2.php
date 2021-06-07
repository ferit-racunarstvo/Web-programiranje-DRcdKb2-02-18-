<?php

/**
 * CREATE TABLE IF NOT EXISTS todo_table (
 *   task_id     INT AUTO_INCREMENT PRIMARY KEY,
 *   title     VARCHAR (255)        DEFAULT NULL,
 *   description VARCHAR (400)        DEFAULT NULL
 * );
 */

require_once("./dbconfig.php");

class TodoTable
{
    public $conn;
    private $tableName;

    public function __construct($name)
    {
        $this->tableName = $name;
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

    public function createTodoTable()
    {

        /**
         * 1. Način
         */
        $sql = $this->conn->prepare("DESCRIBE `{$this->tableName}`");

        if ($sql->execute()) {
            echo "Table exist ! <br>";
            return;
            // Dalje logika..
        } else {
            echo "Table does not exist! <br>";
            // Dalje logika..
        }


        /**
         * Drugi način
         */
        $sql = <<<EOSQL
        CREATE TABLE IF NOT EXISTS $this->tableName (
            task_id     INT AUTO_INCREMENT PRIMARY KEY,
            title     VARCHAR (255)        DEFAULT NULL,
            description VARCHAR (400)        DEFAULT NULL
        );
        EOSQL;

        $this->conn->exec($sql);
        echo "Table created ! <br>";
    }
}



$obj = new TodoTable("todoTable");
$obj->createTodoTable();
