<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "employee";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "insert into employee(emp_id, name, email, phone) values('101','John','John@gmail.com','1234567890');";

$result = mysqli_query($conn, $sql);

$sql = "insert into employee(emp_id, name, email, phone) values('102','Abhi','Abhi@gmail.com','9876543210');";

$result = mysqli_query($conn, $sql);

$sql = "insert into employee(emp_id, name, email, phone) values('103','Ram','Ram@gmail.com','9182837465');";

$result = mysqli_query($conn, $sql);

$sql = "insert into employee(emp_id, name, email, phone) values('104','Mohan','Mohan@gmail.com','1029384756');";

$result = mysqli_query($conn, $sql);


?>
