<?php 


require 'config/config.php';

if ($_SESSION['satin_aldi'] == "yes") {
	$usersatinaldi = $_SESSION['satin_aldi'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE satinaldi='$usersatinaldi'");
	$user = mysqli_fetch_array($user_details_query);

}
else {
	header("Location: register.php");
}





 ?>