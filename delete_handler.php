<?php
if (isset($_GET["user_id"])){
    $receivedId = $_GET["user_id"];

    //to complete deletion, connect to the database

    require_once "connection.php";

    //to delete the query

    $deleteQuery = "delete from users where id=$receivedId";

    //to complete deletion using mysqli query

    $delete = mysqli_query($connection, $deleteQuery);

    // to check if deletion was successful

    if (isset($delete)){
        //redirect to users.php to ee if the users was successfully deleted
        header("location:users.php");
    }else{
        echo "User deletion failed";
    }
}