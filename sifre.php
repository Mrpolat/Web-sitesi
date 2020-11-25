<?php /* yedek kodlar  

include 'config/config.php';

if ($_POST) {
	
	$email = strip_tags($_POST['sifre_email']);

	if ($email!="") {

		$s = $con->query("select * from users where email='".$email."'");
		$c = mysqli_num_rows($s);

		if ($c==0) {
			echo "boyle bir kullanici yok";
		} else {
			$code = uniqid();
			if($con->query("update users set code='".$code."' where email='".$email."'")) {

				// mail gonderme kodlari
				echo "kod maile gonderildi";
			} else {
				echo "bir hata olustu";
			}

		}
		
	} else {
		echo "email bos birakilamaz";
	}
} */
include 'config/config.php'; 
include 'sifre_handler.php';


?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Change Password</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/sifre_style.css">
		
	</head>
	<body>


<div class="wrapper">
	<div class="login_box">
		<div class="login_header">
			<div class="logo">		
				<img src="artboard.png">
			</div>
		</div>
		<!-- kod gonderme baslangic -->
	  <div id="first">
			<form action="sifre.php" method="POST">
				<div class="code-box">
					<input type="email" name="sifre_email" class="mail-box" placeholder="Kayıt Olduğunuz Email Adresi" required>
					<br><?php if(in_array("Email Alanı Doldurulması Zorunlu<br>", $error_array)){
						echo "Email Alanı Doldurulması Zorunlu<br>";}
				    	elseif(in_array("Kayıtlı böyle bir kullanıcı yok<br>", $error_array)){
							echo "Kayıtlı böyle bir kullanıcı yok<br>";
						} 
				 	?>
				</div>
				<br>
					<input type="submit" class="myButton" value="Kod Gönder" name="code_button">
					<br>
					<div class="back"><a href="register.php">Geri Dön</a></div>
					<?php if(in_array("Beklenmeyen bir hata meydana geldi<br>", $error_array)){
					
							echo "Beklenmeyen bir hata meydana geldi<br>";
				    	}	
						if(in_array("kod mail adresine gönderildi<br>", $error_array)){
							echo "kod mail adresine gönderildi<br>";					
						}
					 ?>
					 <a href="sifre_degistir.php" class="swift">Şifrenizi Yenilemek İçin Tıklayın(kodu aldıktan sonra)</a>
			</form>
	  	</div>
				 
	</div>
</div>
	</body>
</html>