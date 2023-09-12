<?php 
    session_start();
    if(is_null($_SESSION['Session_Admin'])==1){
        echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/LoginPage/LoginPage.php">';
    }
?>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0">
        <title>Admin Page</title>
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
    <div class="adminnavigation">
        <a class="adminnavbutton" href="../HomePage/HomePage.php">Regular View</a>
        <a class="adminnavbutton" href="../AdminPage/ReportsPage.php">Reports</a>
        <a class="adminnavbutton" href="../AdminPage/AdminPage.php">Admin Home</a>
    </div>
    <p class="rightspace"></p>
    <body>
        <div class="center">
            <br/><br/><br/><br/><br/><br/>
            <h1 class="header">Admin Page:</h1>
            <p id="one"></p>
            <script> document.getElementById("one").innerHTML = Date.now();</script>
            <hr/>
            <?php 
                include "../Misc/Config.php";
                $sql = "SELECT db_username FROM tbl_users";
                if ($result = mysqli_query($connection, $sql)){
                    $NumRows = mysqli_num_rows($result);
                    for ($x = 1; $x <=$NumRows; $x++){
                        $echo = mysqli_fetch_assoc($result);
                        $echo = $echo["db_username"];
                        echo "<form class='posts' action='DeleteUser.php' method='post'> <h2 id='";
                        echo $echo;
                        echo "'>";
                        echo $echo;
                        echo "<input type='hidden' id='name' name='name' value='";
                        echo $echo;
                        echo "'>";
                        echo "<input type = 'submit' value = 'Delete'></h2></form>";
                    }
                }
            ?>
            <div class="bottomtext">
                <hr/>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
        </div>
        <script type="text/javascript" src="../AdminPage/DeleteUser.js"></script>
        <script type="text/javascript" src="../Misc/DarkMode.js"></script>
    </body>
</html>