<?php
  session_start();
  if(isset($_SESSION['validity'])){
    $name = $_SESSION['validity'];
    include_once 'C:/xampp/htdocs/SkillStructor/includes/config.php';
  }
  else{
    header('Location: index.php');
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
  </head>
  <body>

    <!-- Header nav bar-->
    <!-- <center> -->
      <div class="header">
        <form action="includes/logout.php" method="post">

        <ul style="list-style-type:none;">
          <li style="margin-left:-30px;">
            <a href="#"><img class="logo" src="assets/ico/logos.png" alt="" height="35px" width="130px"/></a>
          </li>
          <li class="tooltip" onclick="cat_modal()">Category</li>
          <li>
            <img class="ico-search" src="assets/ico/search.png" alt="">
            <input class="s_course" type="text" name="s_course" value="" placeholder="Search Courses"/>
          </li>
          <li>
            <img class="ico-search" src="assets/ico/search.png" alt="">
            <input class="s_tutors" type="text" name="s_tutors" value="" placeholder="Search Tutors"/>
          </li>
          <li><a href="#">Business</a></li>
          <li><a href="tutor.html">Teach</a></li>
          <li class="tooltip">My Courses
            <!-- navbar tooltip elements  -->
            <div class="toolpos2">
              <div class="tool_element">
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
              </div>
            </div>
          </li>
          <li><img class="ico-heart tooltip" src="assets/ico/heart-empty.png" alt=""/>
            <!-- navbar tooltip elements  -->
            <div class="toolpos1">
              <div class="tool_element">
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
              </div>
            </div>
          </li>
          <li><img class="ico-cart tooltip" src="assets/ico/cart-empty.png" alt=""/>
            <!-- navbar tooltip elements  -->
            <div class="toolpos1">
              <div class="tool_element">
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
                <p>Adrak Lassan</p>
              </div>
            </div>
          </li>

          <li>
              <button style="width:53px;height:25px;font-size:10px;" type="submit" name="logout" value="LOGOUT">LOGOUT</button>

          </li>
        </ul>
        </form>
      </div>
    <!-- </center> -->

    <!-- promo card -->
    <div class="h_card">
      <img class="frnds" src="assets/img/frnds.png" alt="">
      <div class="h-card-slog-container">
        <p class="slog">Unlock your potential through knowledge</p>
        <p class="slog1">– start your learning journey today!</p>
      </div>
      <!-- <img class="vid" src="assets/img/vid.jpg" alt="">
      <img class="vid" src="assets/img/vid.jpg" alt="">
      <img class="vid" src="assets/img/vid.jpg" alt="">
      <img class="vid" src="assets/img/vid.jpg" alt=""> -->
    </div>

    <!-- category div -->
    <div class="" id="cat-div">
      <div class="category-div scale-in-ver-top">
        <div class="category-ele">
          <p class="cat-head">Developement</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Web Developement</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Mobile Developement</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Programming</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Game Developement</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Database Design & Developement</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Software Engineering</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> No-Code Developement</p>
        </div>

        <div class="category-ele">
          <p class="cat-head">Data Science</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 1</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 2</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 3</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 4</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 5</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 6</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 7</p>
        </div>

        <div class="category-ele">
          <p class="cat-head">Cyber Security</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 1</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 2</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 3</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 4</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 5</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 6</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 7</p>
        </div>

        <div class="category-ele">
          <p class="cat-head">Artificial Intelligence</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 1</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 2</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 3</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 4</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 5</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 6</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 7</p>
        </div>

        <div class="category-ele">
          <p class="cat-head">IT & Software</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> IT Certifications</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Network & Security</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Hardware</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Operating System & Servers</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Other IT & Software</p>
        </div>

        <div class="category-ele">
          <p class="cat-head">Office Productivity</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Microsoft</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> SAP</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Oracle</p>
        </div>

        <div class="category-ele">
          <p class="cat-head">Design</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Web Design</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> UI-UX Design</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Graphics Design & Illustration</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Game Design</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> 3D & Animations</p>
        </div>

        <div class="category-ele">
          <p class="cat-head">Marketing</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Digital Marketing</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Social Media Marketing</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> SEO</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Branding</p>
          <p class="cat-body"><img src="assets/ico/curve_arrow.png" alt=""> Marketing Analysis & Automation</p>
        </div>
      </div>
    </div>

    <div class="course_area">

      <div class="course">
        <p class="c_head">Python</p>
        <p class="c_dec">Python is a versatile and readable high-level programming language.</p>
        <form class="" action="vid.php" method="post">
          <button class="c_but" type="submit" name="learn" value="Python" >Learn Python</button>
        </form>
      </div>
            <?php
            $student = "SELECT * FROM upload_doc";
            $result = $connect->query($student);

            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
            ?>

            <div class="course">
              <p class="c_head"><?php echo $row["course_name"]; ?></p>
              <p class="c_dec"><?php echo $row["info"]; ?></p>
              <form class="" action="includes/retrive.php" method="post">
                <button class="c_but" type="submit" name="learn" value="<?php echo $row["course_name"]; ?>" >Learn <?php echo $row["course_name"]; ?></button>
              </form>
            </div>

            <?php
              }
            }
            else
            {
                echo "DATA NOT FETCHED! CHECK THE SYSTEM OR DATABASE";
            }
            ?>



    </div>

    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
