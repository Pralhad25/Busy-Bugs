<?php
session_start();
if (isset($_POST['logout'])){
  include_once 'config.php';
  session_unset();
  session_destroy();
  echo "<script type = 'text/javascript'> location.href = '../index.php';</script>";
}
?>
