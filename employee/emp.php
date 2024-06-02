<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "employee";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$id = $_POST['employee'];

$sql = "select * from employee where emp_id = $id";

$result = mysqli_query($conn, $sql);

$res = mysqli_fetch_row($result);

echo "Name = $res[1] <br> email = $res[2] <br> phone = $res[3] <br>";


?>

