<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $db = "skill";

  $connect = mysqli_connect($server, $username, $password, $db)or die("Unable to connect");

  // $connect = mysqli_connect("localhost", "root", "", "Project1") or die("database not connected");
 ?>
