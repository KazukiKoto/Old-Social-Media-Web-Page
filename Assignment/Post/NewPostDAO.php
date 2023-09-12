<?php 
    $PostTitle = $_POST['newposttitle'];
    $PostText = $_POST['newposttext'];
    $PostImage = $_POST['newpostimage'];
    $PostTime = time();
    $PostUser = $_COOKIE["Cookie_Username"];
    $PostLikes = 0;
    include "../Misc/Config.php";

    $sql = "SELECT COUNT(1) FROM tbl_post";
    $result = mysqli_query($connection, $sql);
    $NumRows = mysqli_fetch_array($result);
    $NumRows = $NumRows[0];
    $PostID=$NumRows;

    $sql = "INSERT INTO tbl_post (db_post_id, db_post_name, db_post_text, db_post_time, db_post_image, db_post_user, db_post_likes) VALUES('$PostID', '$PostTitle', '$PostText', '$PostTime', '$PostImage' ,'$PostUser', '$PostLikes')";
    if(mysqli_query($connection, $sql)) {
	    echo "Successfully Posted.";
	} else {
		echo mysqli_error($connection);
	}	
    mysqli_close($connection);
?>
<html>
    <a href="../HomePage/HomePage.php"> Go Back.</a>
</html>