<?php

include 'config/config.php';

if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);

    if($user['satin_aldi'] == 'yes') {
        header('Location: https://docsend.com/view/d5d8akr');
    }
    else {
        echo 'You do not have this course';
    }



} else{
    header("Location: register.php");
}

















?>