<?php
require_once "db_connect.php";


$id = $_GET['id'];

$sql = "SELECT * FROM `library` WHERE ID = {$id}";
$result = mysqli_query($conn, $sql);

$layout = '';
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
   
    $layout = "
        <div class='card' style='width: 18rem;'>
            <img src='{$row['image']}' class='card-img-top' alt='{$row['name']}'>
            <div class='card-body'>
                 <h2 class='card-title'> Author: {$row['author_fname']} {$row['author_lname']}</h2>
                    <h3  class='card-text'> Title: {$row['title']}</h3>
                     <h4  class='card-text'> Description: {$row['descrip']}</h4>
                      <h5  class='card-text'> Status: {$row['id_status']}</h5>
                    <h6  class='card-text'> ISBN code:{$row['ISBN']}</h6>
                <a href='index.php' class='btn btn-secondary'>Go back</a>
            </div>
        </div>
    ";
} else {
    $layout = "<h3>No product found with id of {$id}!</h3>";
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
        <div class="row">
            <div class="col col-md-6 mx-auto">
                <?= $layout ?>
            </div>
        </div>
    </div>
</body>

</html>