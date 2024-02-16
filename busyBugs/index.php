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
            <button id="log-btn" type="button" name="log" onclick="log_mod()">Login</button>
          </li>
        </ul>
      </div>
    <!-- </center> -->



    <!-- login modal -->
    <div id="log-modal" class="log-modal">
      <div class="log-modal-element slide-fwd">
        <img class="l_close" src="assets/ico/close.png" onclick="l_close()">
        <label class="h-log">LOGIN</label>
        <br/>
        <img src="assets/ico/user.png" alt="">
        <form action="includes/u_validate.php" method="post">
          <center><input style="margin-top:20px;" id="log_user" class="log_input" type="text" name="Luser" value="" placeholder="Username"/></center>
          <img class="icon" src="assets/ico/user-pin.png" alt="">

          <br/>

          <center><input id="log_pass" class="log_input" type="password" name="Lpassword" value="" placeholder="Password" maxlength="8"/></center>
          <img class="icon" src="assets/ico/lock.png" alt="">

          <p class="forgot"><a href="#">Forgot Password</a></p>
          <button id="log-sub" type="submit" name="login" onclick="return log_val()">Login</button>
        </form>

        <!-- google signin button -->
        <center>
          <div id="my-signin2"></div>
          <script>
            function onSuccess(googleUser) {
              console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
            }
            function onFailure(error) {
              console.log(error);
            }
            function renderButton() {
              gapi.signin2.render('my-signin2', {
                'scope': 'profile email',
                'width': 240,
                'height': 40,
                'longtitle': true,
                'theme': 'dark',
                'onsuccess': onSuccess,
                'onfailure': onFailure
              });
            }
            </script>
          </center>
          <p>New to Skillstructor? Register <a id="tmp-sign-btn" onclick="sign_mod()">Sign Up</a>.</p>

      </div>
    </div>

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


    <!-- SignUp modal -->
    <div id="sign-modal" class="sign-modal">
      <div class="sign-modal-element slide-fwd">
        <center>
          <img class="S_close" src="assets/ico/close.png" onclick="s_close()">
          <label class="h-sign">SIGN UP</label>
          <br/>

          <form action="includes/u_register.php" method="post">

            <table>
              <tr>
                <td><label class="slabel" for="">First Name: </label></td>
                <td><input class="sign_input" type="text" name="firstname" value="" placeholder="" required/></td>
                <td><label class="slabel" style="margin-left:30px;" for="">Last Name: </label></td>
                <td><input class="sign_input" type="text" name="lastname" value="" placeholder="" required/></td>
              </tr>
              <tr>
                <td><label class="slabel" for="">Username: </label></td>
                <td><input class="sign_input" type="text" name="username" value="" placeholder="" required/></td>
                <td><label class="slabel" style="margin-left:30px;" for="">Mob. No.: </label></td>
                <td><input class="sign_input" type="phone" name="mob_no" value="" placeholder="" maxlength="10" required/></td>
              </tr>
              <tr>
                <td><label class="slabel" for="">Email: </label></td>
                <td><input class="sign_input" type="email" name="email" value="" placeholder="" required/></td>
                <td><label class="slabel" style="margin-left:30px;" for="">Password: </label></td>
                <td><input class="sign_input" type="password" name="password" value="" placeholder="" maxlength="8" required/></td>
              </tr>
            </table>
            <br/>
            <button id="sign-sub" type="submit" name="signUp" onclick="return sign_val()">Sign Up</button>
          </form>

          <!-- google signin button -->
          <center>
            <div id="my-signin2"></div>
            <script>
              function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
              }
              function onFailure(error) {
                console.log(error);
              }
              function renderButton() {
                gapi.signin2.render('my-signin2', {
                  'scope': 'profile email',
                  'width': 240,
                  'height': 40,
                  'longtitle': true,
                  'theme': 'dark',
                  'onsuccess': onSuccess,
                  'onfailure': onFailure
                });
              }
              </script>
            </center>
          <p>Already on Skillstructor? <a id="tmp-log-btn" onclick="log_mod()">Login</a>.</p>
        </center>
      </div>
    </div>


    <div class="course_area">
      <div class="course">
        <p class="c_head">HTML</p>
        <p class="c_dec">Use for building structure of website</p>
        <button class="c_but" type="button" name="button">Learn HTML</button>
      </div>

    </div>

    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
