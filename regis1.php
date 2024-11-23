<?php
include('conn.php');

$name = $_POST['userid'];
$pass = $_POST['pass'];

$sql = "INSERT INTO master_login VALUES ('$name', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: ";
}

mysqli_close($conn);
?>