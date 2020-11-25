<?php 

ob_start();
session_start();

$timezone = date_default_timezone_set('Europe/Istanbul');


$con = mysqli_connect("localhost", "root", "", "cyberkrone"); // veritabani baglantisi

if (mysqli_connect_errno()) {
	echo "Baglanti hatasi " . mysqli_connect_errno();
}













 ?>