<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://www.iconsalot.com/asset/icons/pixel-perfect/desktop-app/128/desktop-computer-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-deep-purple.css">
    <script src='main.js'></script>
</head>
<style>
        .font {font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;}
    </style>
<body>
    <!-- Navbar-->
    <header class=" w3-top w3-black w3-card">
        <div class="w3-bar">
          <a href="" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white font"><b>Tech</b> World</a>
          <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="menuPetit()"><i class="fa fa-bars"></i></a>
          <a href='home.html' style="text-decoration: none"><button class="w3-bar-item w3-button boto w3-padding-large">Home</button></a>
          <a href='download.html' style="text-decoration: none"><button class="w3-bar-item w3-button boto w3-padding-large w3-hide-small">Download</button></a>
          <a href='faq.html' style="text-decoration: none"><button class="w3-bar-item w3-button boto w3-padding-large w3-hide-small">FAQ</button></a>
          <div class="w3-dropdown-hover w3-mobile">
            <button class="w3-button boto w3-padding-large w3-hide-small">How To <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-black">
              <a href="#" class="w3-bar-item w3-button w3-mobile">Creating a business</a>
              <a href="#" class="w3-bar-item w3-button w3-mobile">Hiring employees</a>
              <a href="#" class="w3-bar-item w3-button w3-mobile">Buying a building</a>
              <a href="#" class="w3-bar-item w3-button w3-mobile">Making money</a>
              <a href="#" class="w3-bar-item w3-button w3-mobile">Gaining clients</a>
              <a href="#" class="w3-bar-item w3-button w3-mobile">Building a reputation</a>
              <a href="#" class="w3-bar-item w3-button w3-mobile">Expanding your business</a>
            </div>
          </div>
          <a href='forum.html' style="text-decoration: none"><button class="w3-bar-item w3-button boto w3-padding-large w3-hide-small">Forum</button></a>
          <a href='support.html' style="text-decoration: none"><button class="w3-bar-item w3-button boto w3-padding-large w3-hide-small">Support</button></a>
          <a href='signup.php' style="text-decoration: none"><button class="w3-bar-item w3-button boto w3-padding-large w3-hide-small w3-right w3-dark-grey">Sign Up</button></a>
        </div>
        <!-- Navbar pantalles petites -->
        <div id="navPetit" class="w3-bar-block w3-hide w3-black w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href='download.html' style="text-decoration: none"><button class="w3-bar-item w3-button w3-padding-large" onclick="menuPetit()">Download</button></a>
            <div class="w3-dropdown-hover w3-mobile">
              <button class="w3-button boto w3-padding-large">How To <i class="fa fa-caret-down"></i></button>
              <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
                <a href="#" class="w3-bar-item w3-button w3-mobile">Creating a business</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Hiring employees</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Buying a building</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Making money</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Gaining clients</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Building a reputation</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Expanding your business</a>
              </div>
            </div>
            <a href='faq.html' style="text-decoration: none"><button class="w3-bar-item w3-button w3-padding-large" onclick="menuPetit()">FAQ</button></a>
            <a href='forum.html' style="text-decoration: none"><button class="w3-bar-item w3-button w3-padding-large" onclick="menuPetit()">Forum</button></a>
            <a href='support.html' style="text-decoration: none"><button class="w3-bar-item w3-button w3-padding-large" onclick="menuPetit()">Support</button></a>
            <a href='signup.php' style="text-decoration: none"><button class="w3-bar-item w3-button w3-padding-large">Sign Up</button></a>
        </div>
    </header>
        <br><br>
    <!-- Signup -->
    <div id="Signup" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px; margin-top:50px; margin-bottom:50px"><br>
        <div class="w3-center">
          <p class="w3-button w3-hover-none font w3-black"><b>Tech</b> World</p>
          <h2>Welcome!</h2>
        </div>
        <form class="w3-container w3-section" action="" method="post">
            <label><b>Select a username</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required/>
            <label><b>Write a password</b></label>
            <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required/><br>
            <label><b>Write an email</b></label>
            <input class="w3-input w3-border" type="text" placeholder="Enter Email" name="email" required/>
            <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Agree to the Terms Of Service
            <input type="submit" name="submit" value="Sign Up" class="w3-button w3-block w3-purple w3-section w3-padding">
            <span class="w3-right" style="padding-bottom:30px">Already a user? <a href="login.php">Log In</a></span>
        </form>
    </div>
    <?php
            require("Users.php");

            function createUser($user){
                    require_once("connection.php");
                    $save_user = "INSERT INTO `users` (`username`, `password`, `email`) VALUES 
                    ('" . $user->getUsername() ."', '" . $user->getPassword() . "', '" . $user->getEmail() . "')";
                    mysqli_query($connection, $save_user);
                    mysqli_close($connection);
            }

            if(isset($_POST["submit"])){
              if($_POST["username"] != "" && $_POST["password"] != "" && $_POST["email"] != ""){
                  $user = new Users($_POST["username"], $_POST["password"], $_POST["email"]);
              } else {
                  $user = new Users("Ningú", 0, 0);
              }
              echo 'Name: ' . $user->getUsername() . ' Password: ' . $user->getPassword() . ' Email: '.$user->getEmail();
              createUser($user);
            }
            ?>
    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge w3-footer">
            <div class="w3-section">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
              <i class="fa fa-instagram w3-hover-opacity"></i>
              <i class="fa fa-twitter w3-hover-opacity"></i>
              <i class="fa fa-youtube-play w3-hover-opacity"></i>
              <i class="fa fa-twitch w3-hover-opacity"></i>
              <i class="fa fa-reddit-square w3-hover-opacity"></i>
            </div>
            <p class="w3-medium">&copy; 2019 Dana Gomez Balada</p>
        </footer>
        <script>
                // Menu petit
                function menuPetit() {
                    var x = document.getElementById("navPetit");
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else { 
                        x.className = x.className.replace(" w3-show", "");
                    }
                }
            </script>
</body>
</html>