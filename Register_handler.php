<?php
if (isset($_POST["btn_reg"])){
    //receive data from user
     $name = $_POST["x"];
     $email = $_POST["y"];
     $password = $_POST ["z"];

     //To start saving, connect to your created db

    require_once "connection.php";

    //Now prepare the insert query

    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$password')";

    //complete saving using mysqli query

    $save = mysqli_query($connection, $insertQuery);

    //check if saving was successful

    if (isset($save)){
        echo "user registered successfully";
    }else{
        echo "User registration failed";
    }

}