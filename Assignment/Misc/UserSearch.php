<?php 
    $SearchUsername = $_POST['username'];
    include "../Misc/Config.php";
    $sql = "SELECT db_username FROM tbl_users WHERE db_username = '$SearchUsername'";
    if ($result = mysqli_query($connection, $sql)){
        if (mysqli_num_rows($result)==1){
            $SearchTarget = (mysqli_fetch_assoc($result));
            $SearchTarget = $SearchTarget['db_username'];
            echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/FriendsPage/FriendsPage.php">';
        }            
    }
    else{
        echo "No user found, incorrect username";
    }
?>