<?php
  if (isset($_POST['add'])){
    include_once 'config.php';
    $a = mysqli_real_escape_string($connect, $_POST['coursename']);
    $sec = mysqli_real_escape_string($connect, $_POST['secname']);
    $l = mysqli_real_escape_string($connect, $_POST['line']);
    $targetDir = "C:/xampp/htdocs/SkillStructor/includes/uploads/";
    $targetFile = $targetDir.$_FILES['vid']['name'];
    $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    echo "File  = ".$targetFile;
    $b = mysqli_real_escape_string($connect, $_FILES['vid']['name']);
    $c = "1";

    $sql = mysqli_query($connect, "INSERT INTO `upload_doc` (`upload_id`, `course_name`, `info`, `sec_name`, `upload_file`, `tutorID`) VALUES (NULL, '$a', '$l', '$sec', '$b', '$c')");
    if (move_uploaded_file($_FILES['vid']['tmp_name'], $targetFile)){
       echo "<script type='text/javascript'>alert('Success!');location.href = '../tdash.php'; </script>";
    }
    else{
      // echo "<script type='text/javascript'>alert('Failed!');location.href = '../tdash.php'; </script>";
    }
  }
  else{

  }
 ?>
<!--
 <?php
$file_exts = array("jpg", "bmp", "jpeg", "gif", "png");
$upload_exts = end(explode(".", $_FILES["vid"]["name"]));
if ((($_FILES["vid"]["type"] == "image/gif")
|| ($_FILES["vid"]["type"] == "image/jpeg")
|| ($_FILES["vid"]["type"] == "image/png")
|| ($_FILES["vid"]["type"] == "image/pjpeg"))
&& ($_FILES["vid"]["size"] < 2000000)
&& in_array($upload_exts, $file_exts))
{
if ($_FILES["vid"]["error"] > 0)
{
echo "Return Code: " . $_FILES["vid"]["error"] . "<br>";
}
else
{
echo "Upload: " . $_FILES["vid"]["name"] . "<br>";
echo "Type: " . $_FILES["vid"]["type"] . "<br>";
echo "Size: " . ($_FILES["vid"]["size"] / 1024) . " kB<br>";
echo "Temp file: " . $_FILES["vid"]["tmp_name"] . "<br>";
// Enter your path to upload file here
if (file_exists("up/" .
$_FILES["vid"]["name"]))
{
echo "(".$_FILES["vid"]["name"].")".
" already exists. "."</div>";
}
else
{
move_uploaded_file($_FILES["vid"]["tmp_name"],
"up/" . $_FILES["vid"]["name"]);
echo "<div class='sucess'>"."Stored in: " .
"up/" . $_FILES["vid"]["name"]."</div>";
}
}
}
else
{
echo "Invalid file";
}
?> -->
