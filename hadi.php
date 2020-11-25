<?php 




$image_1 = "Best_Posts/girisimci_motive_1.jpg";
$image_2 = "Best_Posts/girisimci_motive_2.jpg";
$image_3 = "Best_Posts/girisimci_motive_3.jpg";
$image_4 = "Best_Posts/girisimci_motive_4.jpg";
$image_5 = "Best_Posts/girisimci_motive_5.jpg";
$image_6 = "Best_Posts/girisimci_motive_6.jpg";
$image_7 = "Best_Posts/girisimci_motive_7.jpg";
$image_8 = "Best_Posts/girisimci_motive_8.jpg";
$image_9 = "Best_Posts/girisimci_motive_9.jpg";
$image_10 = "Best_Posts/girisimci_motive_10.jpg";
$image_11 = "Best_Posts/girisimci_motive_11.jpg";
$image_12 = "Best_Posts/girisimci_motive_12.jpg";
$image_13 = "Best_Posts/girisimci_motive_13.jpg";
$image_14 = "Best_Posts/girisimci_motive_14.jpg";
$image_15 = "Best_Posts/girisimci_motive_15.jpg";
$image_16 = "Best_Posts/girisimci_motive_16.jpg";
$image_17 = "Best_Posts/girisimci_motive_17.jpg";

$image = rand(1,17);


switch ($image) {
	case  1:
		echo "<img src='$image_1'>";
		break;
	case  2:
		echo "<img src='$image_2'>";
		break;
	case  3:
		echo "<img src='$image_3'>";
		break;
	case  4:
		echo "<img src='$image_4'>";
		break;
	case  5:
		echo "<img src='$image_5'>";
		break;
	case  6:
		echo "<img src='$image_6'>";
		break;
	case  7:
		echo "<img src='$image_7'>";
		break;
	case  8:
		echo "<img src='$image_8'>";
		break;
	case  9:
		echo "<img src='$image_9'>";
		break;
	case  10:
		echo "<img src='$image_10'>";
		break;
	case  11:
		echo "<img src='$image_11'>";
		break;
	case  12:
		echo "<img src='$image_12'>";
		break;
	case  13:
		echo "<img src='$image_13'>";
		break;
	case  14:
		echo "<img src='$image_14'>";
		break;
	case  15:
		echo "<img src='$image_15'>";
		break;
	case  16:
		echo "<img src='$image_16'>";
		break;
	case  17:
		echo "<img src='$image_17'>";
		break;
	default:
		echo "tanimli degil";
		break;
}




 ?>