<html>
 <head>
  <title>Primjer 3</title>
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <?php $mysqli = new mysqli('db', 'user', 'test', "ferit"); ?>

    <div class="container">
        <?php if($mysqli->connect_errno):  ?>
            <div class="alert-danger">
                <span>Connection failed !</span>
            </div>
        <?php else: ?>
            <div class="alert-success">
                <span>Connection to db working !</span>
            </div>
        <?php endif; ?>

        <div>
            <?php 
                $sql = 'SELECT * FROM Users';
                $result = $mysqli->query($sql);
            ?>
        
            <?php while($row = $result->fetch_assoc()): ?>
                <ul class="list-group">
                    <li class="list-group-item"><?= $row["id"] ?></li>
                    <li class="list-group-item"><?= $row["name"] ?></li>
                    <li class="list-group-item"><?= $row["lastname"] ?></li>
                </ul>
            <?php endwhile; ?>
            
            <?php $mysqli->close(); ?>
        </div>
    </div>
</body>
</html>
