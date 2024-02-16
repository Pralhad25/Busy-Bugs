<?php
session_start();
if(isset($_SESSION['validity'])){
  $name = $_SESSION['validity'];
}
else{
  header('Location: tutor.php');
}

if (isset($_POST['add'])){
  echo "<label>Section Name:</label>";
  echo '<input type="text" name="secname" value="" placeholder=""> <br/>';
  echo '<input type="file" name="vid" value=""> <br/>';
  echo '<input type="submit" name="add" value="SUBMIT">';
}

?>
