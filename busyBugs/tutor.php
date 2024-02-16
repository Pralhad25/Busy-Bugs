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

          <li style="transform: translate(0,10px); float: right;">
            <button id="log-btn" type="button" name="log" onclick="log_mod()">Login</button>
          </li>
          <li style="transform: translate(0,10px); float: right;"><a href="index.html">Learn</a></li>

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
        <form action="includes/t_validate.php" method="post">
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
      <img class="tutor" src="assets/img/tutor.png" alt="">
      <div class="h-card-slog-container">
        <p class="slog">Educate the World, One Click at a Time</p>
        <p class="slog1">– Be a Virtual Educator Today!</p>
      </div>
      <!-- <img class="vid" src="assets/img/vid.jpg" alt="">
      <img class="vid" src="assets/img/vid.jpg" alt="">
      <img class="vid" src="assets/img/vid.jpg" alt="">
      <img class="vid" src="assets/img/vid.jpg" alt=""> -->
    </div>

    <!-- SignUp modal -->
    <div id="sign-modal" class="sign-modal">
      <div class="sign-modal-element slide-fwd">
        <center>
          <img class="S_close" src="assets/ico/close.png" onclick="s_close()">
          <label class="h-sign">SIGN UP</label>
          <br/>

          <form action="includes/t_register.php" method="post">

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


    <div>
      <img class="pro2" src="assets/img/pro2.jpg" alt="">
    </div>

    <script src="https://apis.google.com/js/platform.js?onload=rende" async defer></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
