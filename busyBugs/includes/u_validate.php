<?php
if (isset($_POST['login'])){
  include_once 'config.php';
  session_start();

  $username = mysqli_real_escape_string($connect, $_POST['Luser']);
  $password = mysqli_real_escape_string($connect, $_POST['Lpassword']);

  $sql = mysqli_query($connect, "SELECT * FROM u_log WHERE logUser='$username' And logPass='$password';");

  if (mysqli_num_rows($sql) > 0){
    $_SESSION["validity"] = "$username";
    echo "<script type = 'text/javascript'> location.href = '../dashboard.php';</script>";
  }
  else{
    echo "<script type = 'text/javascript'>alert('Failed'); location.href = '../index.php';</script>";
  }
}

?>
