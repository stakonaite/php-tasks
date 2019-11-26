<?php

if(isset($_COOKIE['users_data'])){
    $name = $_COOKIE['users_data']['name'];
    $email = $_COOKIE['users_email']['us'];

    header('location:Home.php');
}
?>
