<?php
    $DBServer = "";
    $DBUsername = "";
    $DBPassword = "";
    $DB = "";

    $connection = new mysqli($DBServer, $DBUsername, $DBPassword, $DB);

    if($connection->connect_error) {
        echo $connection->connect_error;
    }
?>