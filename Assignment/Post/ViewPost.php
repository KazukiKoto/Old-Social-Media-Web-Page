<?php 
    if (isset($_COOKIE["Cookie_Username"]) == false){
        echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/LoginPage/LoginPage.php">';
    }
    $PostID = $_POST['id'];
    include "../Misc/Config.php";
    $sql = "SELECT * FROM tbl_post WHERE db_post_id='$PostID'";
        if ($result = mysqli_query($connection, $sql)){
            $array = mysqli_fetch_array($result);
            $id = $array[0];
            $name = $array[1];
            $text = $array[2];
            $time = $array[3];
            $image = $array[4];
            $user = $array[5];
            $likes = $array[6];
	} else {
		echo mysqli_error($connection);
	}	
    mysqli_close($connection);
?>
<html>
    <a href="AdminPage.php"> Go Back.</a>
</html>