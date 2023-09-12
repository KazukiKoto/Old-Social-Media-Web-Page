<?php 
    session_start();
    if($_POST['phpFunction'] == 'login') {
        login();
    }

    function login() {
        $myUsername = $_POST["username"];
        $myPassword = $_POST["password"];

        include "../Misc/Config.php";
        $sql = "SELECT db_password FROM tbl_users WHERE db_username = '$myUsername'";
        if ($result = mysqli_query($connection, $sql)){
            $ResultForVerify = (mysqli_fetch_assoc($result));
            $PassForVerify = $ResultForVerify['db_password'];
            if (password_verify($myPassword, $PassForVerify)) {
                setcookie("Cookie_Username", $myUsername, time() + 2592000000, "/");
                $sql = "SELECT db_bannedtimer FROM tbl_users WHERE db_username = '$myUsername'";
                $result = mysqli_query($connection, $sql);
                $TimerForVerify = (mysqli_fetch_assoc($result));
                $TimerForVerify = $TimerForVerify['db_bannedtimer'];
                if ($TimerForVerify>time()){
                    setcookie("Cookie_BanTimer", $Timer, time()+2592000000, "/");
                    echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/BanPage/BanPage.php">';
                } else{
                    $sql = "SELECT db_privelege FROM tbl_users WHERE db_username = '$myUsername'";
                    $result = mysqli_query($connection, $sql);
                    $ResultForVerify = (mysqli_fetch_assoc($result));
                    $PrivelegeForVerify = $ResultForVerify['db_privelege'];
                    if ($PrivelegeForVerify == "A"){
                        $_SESSION["Session_Admin"] = "True";
                        echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/AdminPage/AdminPage.php">';
                    } else{
                        echo '<meta http-equiv = "refresh" content = "0; URL=https://s4201714-ctxxxx.uogs.co.uk/Assignment/HomePage/HomePage.php">';
                    }
                }
            } else {
                echo "Password is incorrect";
            }
        }
        else{
            echo "No user found, incorrect username";
        }    
    }
    mysqli_close($connection)
?>