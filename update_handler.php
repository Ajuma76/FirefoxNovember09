<?php

if (isset($_POST["btn_update"])){
    $userId  = $_POST["id"];
    $updatedName = $_POST["x"];
    $updatedEmail = $_POST["y"];
    $updatedPassword = $_POST["z"];

    //connect to the database

    require_once "connection.php";

    //prepare  the updated query

    $updateQuery = "UPDATE `users` SET `jina`='$updatedName',`arafa`='$updatedEmail',`siri`='$updatedPassword' WHERE id='$userId'";

    //finally, execute the update using the mysqli query function

    $update = mysqli_query($connection, $updateQuery);

    if (isset($update)){
        header("location:users.php");
    }else{
        echo "Updating failed";
    }
}
