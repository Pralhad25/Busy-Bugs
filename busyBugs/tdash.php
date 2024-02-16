<?php
  session_start();
  if(isset($_SESSION['validity'])){
    $name = $_SESSION['validity'];
  }
  else{
    header('Location: tutor.php');
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Skillstructor</title>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <link rel="icon" href="assets/ico/favicons.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Vithkuqi:wght@700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/main.css">

    <script language="javascript">

    </script>
  </head>
  <body>

    <!-- Header nav bar-->
    <!-- <center> -->
      <div class="header">

        <ul style="list-style-type:none;">
          <li style="margin-left:-30px;">
            <a href="#"><img class="logo" src="assets/ico/logos.png" alt="" height="35px" width="130px"/></a>
          </li>

          <li style="transform: translate(0,10px); float: right;">
            <form action="includes/tlogout.php" method="post">
              <button type="submit" name="logout">LOGOUT</button>
            </form>
          </li>
          <li style="transform: translate(0,10px); float: right;"><a href="index.html">Learn</a></li>
        </ul>

      </div>
    <!-- </center> -->

    <!-- promo card -->
    <div class="h_card">
        <img class="tutor" src="assets/img/tutor.png" alt="">
        <div style="font-size:20px;">
          <p style="font-size:40px;font-weight: bold;">Learning Management System (LMS)</p>
          <form action="includes/upload.php" method="post" enctype="multipart/form-data">
            <label style="font-size: 25px; font-weight:bold;">Course Name:</label>
            <input type="text" name="coursename" value="" placeholder="Enter Cource Name" style="padding:6px; width:250px; text-align:center;"> <br/><br/>
            <label style="font-size: 25px; font-weight:bold;">About Course:</label>
            <input type="text" name="line" value="" placeholder="One Line Info" style="padding:6px; width:250px; text-align:center;"> <br/><br/>


            <button type="submit" name="add" onclick="add()" style="font-size: 20px; border-radius:10px;">Add section</button> <br><br>

            <label style="font-size: 25px; font-weight:bold;">Section Name:</label>
            <input type="text" name="secname"  placeholder="Enter Section Name" style="padding:6px; width:250px; text-align:center;"> <br><br>

            <input type="file" name="vid" style="font-weight:bold;font-size:20px;" > <br/><br/>
            <input class="submit-button" type="submit" name="add" value="SUBMIT" style="font-weight:bold; font-size:20px; border-radius:20px;"> <br/>

        </form>
        </div>
      </div>



    <script src="https://apis.google.com/js/platform.js?onload=rende" async defer></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
