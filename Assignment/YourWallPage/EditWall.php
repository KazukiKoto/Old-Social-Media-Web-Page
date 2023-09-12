<?php 
    if (is_null($_COOKIE["Cookie_Username"])==1){
        echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/LoginPage/LoginPage.php">';
    }
    $WallBio = $_POST['editwallbio'];
    $WallDesc = $_POST['editwalldesc'];
    $WallImage = $_POST['editwallimage'];
    $WallUser = $_COOKIE["Cookie_Username"];
    include "../Misc/Config.php";

    $sql = "SELECT * FROM tbl_walls WHERE db_wall_user = '$WallUser'";
    if($result = mysqli_query($connection, $sql)){
        $array = mysqli_fetch_array($result);
        $check = $array[0];
        if ($WallUser == $check){
            $sql = "UPDATE `tbl_walls` SET db_wall_desc = '$WallDesc', db_wall_image = '$WallImage', db_wall_bio = '$WallBio' WHERE db_wall_user = '$WallUser'";
            if(mysqli_query($connection, $sql)) {
                echo "Successfully Changed.";
            } else {
                echo mysqli_error($connection);
            }	
            mysqli_close($connection);
        } else{
            $sql = "INSERT INTO `tbl_walls`". " values ". "('$WallUser', '$WallDesc', '$WallImage', '$WallBio')";
            if(mysqli_query($connection, $sql)) {
                echo "Successfully Changed.";
            } else {
                echo mysqli_error($connection);
            }	
            mysqli_close($connection);
        }
    } else{
        echo mysqli_error($connection);
    }
    
?>
<html>
    <a href="YourWallPage.php"> Go Back.</a>
</html>