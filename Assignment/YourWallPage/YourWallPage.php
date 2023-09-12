<?php
    if (isset($_COOKIE["Cookie_Username"]) == false){
        echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/LoginPage/LoginPage.php">';
    }
?>
<html lang="en">
    <head>
        <title><?php echo $_COOKIE["Cookie_Username"]?>'s Wall</title>
        <link href="../Misc/Styles.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" href="../Misc/Placeholder.png">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> <!-- JQuery CDN -->
    </head>
    <p class="leftspace"></p>
    <div class="topbar">
        <div class="darkmode">
            <img src="../Misc/DarkLightbulb.png" id="ModeChange" onclick="DarkMode()">
        </div>
        <form class="searchbar" id="searchbar" action="../Misc/UserSearch.php" method="post">
            <input type="text" placeholder="Search..." id="username" name="username">
            <button type="submit"><img src="../Misc/search.png"></button>
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
            <h1 class="header"><?php echo $_COOKIE["Cookie_Username"]?>'s Wall</h1>
            <a href="../Post/NewPost.php">New Post +</a>
            <a href="../YourWallPage/YourWallEdit.php">Edit Wall</a>
            <a href="../Misc/Logout.php?>">Logout</a>
            <hr/>
            <?php 
                include "../Misc/Config.php";
                $User = $_COOKIE['Cookie_Username'];
                $sql = "SELECT * FROM tbl_walls WHERE db_wall_user = '$User'";
                if ($result = mysqli_query($connection, $sql)){
                    $array = mysqli_fetch_array($result);
                    $Desc = $array[1];
                    $Image = $array[2];
                    $Bio = $array[3];
                    echo "<div class='posts'> <h1>";
                    echo $User;
                    echo "</h1><h2>Bio: ";
                    echo $Bio;
                    echo "</h2><h3>Description: ";
                    echo $Desc;
                    echo "</h3><p>";
                    echo $text;
                    echo "</p></div>";
                }
                else{
                    echo mysqli_error($connection);
                }
            ?>
            <p id="one"></p>
            <div class="bottomtext">
                <hr/>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
        </div>
        <script type="text/javascript" src="../Misc/DarkMode.js"></script>
    </body>
</html>