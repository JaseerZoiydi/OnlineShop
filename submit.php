<?php
include('configuration/config.php');
if (isset($_POST['up1'])) {
    $NAME = $_POST['name'];
    $PASSWORD = $_POST['password'];
    $insert = "INSERT INTO users (name , password) VALUES ('$NAME','$PASSWORD')";
    mysqli_query($con, $insert);
    if ($NAME == "admin" && $PASSWORD == "admin") {
        header('location: index.php');
    }else if ($NAME == "user" && $PASSWORD == "user"){
        header('location: products.php');
        
    }else{
        header('location: login.html');


    }

}
?>