<?php 
    $UserToDelete = $_POST['name'];
    include "../Misc/Config.php";
    $sql = "DELETE FROM tbl_users WHERE db_username='$UserToDelete'";
    if(mysqli_query($connection, $sql)) {
	    echo "Successfully Deleted.";
	} else {
		echo mysqli_error($connection);
		return;
	}	
    mysqli_close($connection);
?>
<html>
    <a href="AdminPage.php"> Go Back.</a>
</html>