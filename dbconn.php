<?php
    $hostname = "	sql208.epizy.com";
    $username = "epiz_28500117";
    $password = "q5yMbEh7TgMt";
    $dbname = "epiz_28500117_aknotesaver";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
        die("connection failed:" . mysqli_connect_error());
    }