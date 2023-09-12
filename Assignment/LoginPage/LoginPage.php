<?php 
    session_start();
    if (is_null($_COOKIE["Cookie_Username"])==0){
        echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/HomePage/HomePage.php">';
    }
?>
<html>
    <head>
        <title>Log in Page</title>
        <link href="../Misc/Styles.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" href="../Misc/Placeholder.png">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> <!-- JQuery CDN -->
    </head>
    <p class="leftspace"></p>
    <div class="topbar">
        <div class="darkmode">
            <img src="../Misc/DarkLightbulb.png" id="ModeChange" onclick="DarkMode()">
        </div>
        <form class="searchbar">
            <input type="text" placeholder="Search...">
            <button><img src="../Misc/search.png"></button>
        </form>
    </div>
    <div class="navigation">
        <a class="navbutton" href="../LoginPage/LoginPage.php">Login</a>
        <a class="navbutton" href="../RegistrationPage/RegistrationPage.php">Register</a>
    </div>
    <p class="rightspace"></p>
    <body>
        <div class="center">
            <br/><br/><br/><br/><br/><br/>
            <h1 class="header">Log In:</h1>
            <hr/>
            <form class="form" id="loginform">
                <h3>Username:</h3>
                <input type="text" name="username" id="username" required="required" maxlength="20">
                <h3>Password:</h3>
                <input type="password" name="password" id="password" required="required" maxlength="32">
                <br/>
                <br/>
                <input type="submit" value="Log in" id="formsubmit" onclick="myFunction()"> 
            </form>
            <p id="errorbox"></p>
            <script src="Login.js"></script>
            <script type="text/javascript" src="../Misc/DarkMode.js"></script>
            <div class="bottomtext">
                <hr/>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
        </div>
    </body>
</html>
