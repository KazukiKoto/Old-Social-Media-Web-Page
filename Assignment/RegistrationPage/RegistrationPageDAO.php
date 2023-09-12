<?php 
    if($_POST['phpFunction'] == 'create') {
        create();
    }

    function create() {
        $Username = $_POST["username"];
        $Password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        include "../Misc/Config.php";
        $sql = "INSERT INTO `tbl_users`". " values ". "('$Username', '$Password', 'U', '0')";
        if(mysqli_query($connection, $sql)) {
			echo "Successfully registered.";
		} else {
			echo mysqli_error($connection);
		}	
        mysqli_close($connection);
    }
?>