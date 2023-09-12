<?php
if (isset($_COOKIE["Cookie_Username"]) == false){
    echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/LoginPage/LoginPage.php">';
}
?>
<html>
    <head>
        <title>Friends</title>
        <link href="../Misc/Styles.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" href="../Misc/Placeholder.png">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> <!-- JQuery CDN -->
    </head>
    <p class="leftspace"></p>
    <div class="topbar">
        <div class="darkmode">
            <img src="../Misc/DarkLightbulb.png" id="ModeChange" onclick="DarkMode()">
        </div>
        <form class="searchbar" id="searchbar">
            <input type="text" placeholder="Search..." id="username">
            <button onclick="UserSearchFunction()"><img src="../Misc/search.png"></button>
        </form>
    </div>
    <div class="navigation">
        <a class="navbutton" href="../HomePage/HomePage.php">Home</a>
        <a class="navbutton" href="../YourWallPage/YourWallPage.php">Your Wall</a>
        <a class="navbutton" href="../FriendsPage/FriendsPage.php">Friends</a>
    </div>
    <p class="rightspace"></p>
    <body>
        <div class="center">
            <br/><br/><br/><br/><br/><br/>
            <h1 class="header">Home:</h1>
            <hr/>
            <?php 
                include "../Misc/Config.php";
                $sql = "SELECT db_username FROM tbl_users";
                if ($result = mysqli_query($connection, $sql)){
                    $NumRows = mysqli_num_rows($result);
                    for ($x = 1; $x <=$NumRows; $x++){
                        $echo = mysqli_fetch_assoc($result);
                        $echo = $echo["db_username"];
                        echo "<form class='posts' action='../YourWallPage/ViewWall.php' method='post'> <h2 id='";
                        echo $echo;
                        echo "'>";
                        echo $echo;
                        echo "<input type='hidden' id='name' name='name' value='";
                        echo $echo;
                        echo "'>";
                        echo "<input type = 'submit' value = 'View'></h2></form>";
                    }
                }
            ?>
            <script src="../Misc/UserSearch.js"></script>
            <script type="text/javascript" src="../Misc/DarkMode.js"></script>
            <div class="bottomtext">
                <hr/>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
        </div>
    </body>
</html>
