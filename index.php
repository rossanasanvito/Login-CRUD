<?php
require_once "db_connect.php";

$sql = "SELECT * FROM `library`";
$result = mysqli_query($conn, $sql);

$layout = '';
if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    foreach ($rows as $row) {
    
        $layout .= "
        <div>
            <div class='card my-3'>
                <img src='{$row['image']}' class='card-img-top' alt='{$row['author_lname']}'>
                <div class='card-body'>
                    <h5 class='card-title'>{$row['author_fname']} {$row['author_lname']}</h5>
                    <h3  class='card-text'>{$row['title']}</h3>
                    <a href='details.php?id={$row['ID']}' class='btn btn-primary'>Details</a>
                    <a href='publisher.php?id={$row['publisher_name']}' btn btn-secondary btn-sm>From the same Publisher</a>
                </div>
            </div>
        </div>
        ";
    }
} else {
    $layout = "<h3>No data found!</h3>";
};

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <a href="create.php" class="btn btn-success">Create Media</a>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?= $layout ?>
        </div>
    </div>
</body>

</html>