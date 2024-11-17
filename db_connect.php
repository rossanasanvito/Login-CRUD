<?php

try {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "library";

    $conn = mysqli_connect($host, $user, $password, $database);
    // echo 'Connected successfully';
} catch (mysqli_sql_exception $e) {
    echo "Failed to connect to the database: " . $e->getMessage();
};

?>
