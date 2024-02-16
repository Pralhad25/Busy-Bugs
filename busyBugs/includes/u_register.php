<?php
if (isset($_POST['signUp'])){
  include_once 'config.php';

  $fname = mysqli_real_escape_string($connect, $_POST['firstname']);
  $lname = mysqli_real_escape_string($connect, $_POST['lastname']);
  $uname = mysqli_real_escape_string($connect, $_POST['username']);
  $mobno = mysqli_real_escape_string($connect, $_POST['mob_no']);
  $mail = mysqli_real_escape_string($connect, $_POST['email']);
  $pass = mysqli_real_escape_string($connect, $_POST['password']);

  $sql = "INSERT INTO `u_log` (`logID`, `logUser`, `logPass`) VALUES (NULL, '$uname', '$pass')";
  $sql2 = "INSERT INTO `user` (`userID`, `firstName`, `lastName`, `mob`, `email`) VALUES (NULL, '$fname', '$lname', '$mobno', '$mail')";

  if(($connect->query($sql)) && ($connect->query($sql2)) === TRUE){
    echo "<script>alert('Registration Successful'); location.href= '../index.php'</script>";
  }
  else{
    echo "<script>alert('Registration Failed'); location.href= '../index.php'</script>";
  }
}
else{
  echo "<script>alert('Auth Failed');location.href= '../index.php'</script>";
}
 ?>
