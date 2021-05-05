<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "notedata";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
        die("connection failed:" . mysqli_connect_error());
    }