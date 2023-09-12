<?php
    if (is_null($_COOKIE["Cookie_Username"])==1){
        echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/LoginPage/LoginPage.php">';
    }

?>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0">
        <title>New Post</title>
        <link href="../Misc/Styles.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" href="../Misc/Placeholder.png">
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
        <a class="navbutton" href="../HomePage/HomePage.php">Home</a>
        <a class="navbutton" href="../YourWallPage/YourWall.php">Your Wall</a>
        <a class="navbutton" href="../FriendsPage/FriendsPage.php">Friends</a>
    </div>
    <p class="rightspace"></p>
    <body>
        <div class="center">
            <br/><br/><br/><br/><br/><br/>
            <h1 class="header">Edit Wall:</h1>
            <hr/>
            <form class="editwallform" id="editwallform" action="EditWall.php" method="post">
                <input type="text" placeholder="Bio" id="editwallbio" name="editwallbio" required="required" maxlength="64"><br/>
                <input type="text" placeholder="Description" id="editwalldesc" name="editwalldesc" required="required" maxlength="255"><br/>
                <input type="file" id="editwallimage" name="editwallimage" accept="image/"><br/>
                <input type="submit" value="Post">
            </form>
            <div class="bottomtext">
                <hr/>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
        </div>
        <script type="text/javascript" src="../Misc/DarkMode.js"></script>
    </body>
</html>