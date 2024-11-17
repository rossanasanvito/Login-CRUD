

<?php
require_once 'db_connect.php';

//var_dump($_POST) ;

//var_dump($result);

if (isset($_POST['create_media'])) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$title = $_POST['title'];
$image = $_POST['image'];
$ISBN = $_POST['isbn'];
$descrip = $_POST['description'];
$type = $_POST['type'];
$publisher_name = $_POST['publisher_name'];
$publish_date = $_POST['date'];
$id_status = $_POST['status'];

$sql = "INSERT INTO `library`(`title`, `image`, `ISBN`, `descrip`, `type`, `author_fname`, `author_lname`, `publisher_name`, `publish_date`, `id_status`) VALUES 
('$title', '$image', '$ISBN', '$descrip', '$type', '$fname', '$lname', '$publisher_name', '$publish_date', '$id_status')";
$result = mysqli_query($conn, $sql);


if ($result) {
    echo "<div class='alert alert-success' role='alert'>
    New Media has been created successfully! $picture[1]
    </div>";
    } else {
    echo "<div class='alert alert-danger' role='alert'>
    0oops...Something went wrong!
</div>";
};
header("refresh: 10; url=index.php");
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
<h3 class="text-center my-3">Create media</h3>
<form method="POST" >
<div class="mb-3">
<label for="name" class="form-label"> Author First Name</label>
<input type="text" id="author_fname" name="fname" class="form-control" required>
</div>
<div class="mb-3">
<label for="name" class="form-label"> Author Last Name</label>
<input type="text" id="author_lname" name="lname" class="form-control" required>
</div>
<div class="mb-3">
<label for="name" class="form-label"> Titlee</label>
<input type="text" id="title" name="title" class="form-control" required>
</div>
<div class="mb-3">Short Description</label>
<input type="text" id="descrip" name="description" class="form-control" required>
</div>
<div class="mb-3">
<label for="price" class="form-label">ISBN Code</label>
<input type="text" id="ISBN" name="isbn" class="form-control" required>
</div>
<div class="mb-3">
<label for="name" class="form-label"> Media Type</label>
<input type="text" id="type" name="type" class="form-control" required>
</div>
<div class="mb-3">
<label for="name" class="form-label"> Publisher</label>
<input type="text" id="publisher_name" name="publisher_name" class="form-control" required>
</div>
<div class="mb-3">
<label for="name" class="form-label"> Publish date</label>
<input type="date" id="publish_date" name="date" class="form-control" >
</div>
<div class="mb-3">
<label for="picture" class="form-label">Picture</label>
<input type="text" id="image" name="image" class="form-control">
</div>
<div class="mb-3">
<label for="picture" class="form-label">Current Status</label>
<input type="text" id="id_status" name="status" class="form-control">
</div>
<input type="submit" class="btn btn-primary" name="create_media" value="Submit">
<a href="index.php" class="btn btn-secondary">Back</a>
</form>
</div>
</div>
</div>
</body>

</html>
