<?php

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
        $this->conn = null;
    }

    public function selectTodoTasks()
    {
        $sql = <<<EOSQL
            SELECT task_id, title, description FROM $this->tableName ORDER BY title;
        EOSQL;

        $query = $this->conn->prepare($sql);

        try {
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}


$obj = new TodoTable("todoTable");
$tasks = $obj->selectTodoTasks();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Primjer 4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>

<body>
    <section class="container text-center">
        <h1 class="title">PHP Obaveze generator</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $tasks->fetch()) : ?>
                    <tr>
                        <!-- https://www.thegeekstuff.com/2012/02/xss-attack-examples/ -->
                        <!-- https://en.wikipedia.org/wiki/Cross-site_scripting -->

                        <td><?= htmlspecialchars($row['task_id']) ?></td>
                        <td><?= htmlspecialchars($row['title']) ?></td>
                        <td><?= htmlspecialchars($row['description']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </section>
</body>
</div>

</html>