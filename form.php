<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "test";

  $conn = mysqli_connect($servername, $username, $password, $database);
  
  if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
  }
  else
  {
    echo "Connection Stablished Successfully<br>";
  }


  $username = $_POST['UserName'];
  $password = $_POST['Password'];
  echo $username."<br>";
  echo $password."<br>";

  $sql = "insert into login(user, password) values('$username', '$password');";

  if(mysqli_query($conn, $sql)){
    echo "<script>alert('Login Successfully');</script>";
  }
?>