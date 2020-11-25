<?php 

include 'config/config.php';

$error = array();

if ($_POST) {

	$email = strip_tags($_POST['sifre_email']);
	$sifre1 = strip_tags($_POST['sifre1']);
	$sifre2 = strip_tags($_POST['sifre2']);
	$code = strip_tags($_POST['code']);
	if ($email!="" and $sifre1!="" and $sifre2!="" and $code!="") {
		if ($sifre1==$sifre2) {
			$s = $con->query("select * from users where email='".$email."' and code='".$code."'");
			$c = mysqli_num_rows($s);
			if ($c!=0) {
				
				if($con->query("update users set password='".md5($sifre1)."',code='' where email='".$email."'")) {
					array_push($error, "Şifre başarıyla değiştirildi<br>");
				}
				else {
					array_push($error, "Bir hata oluştu<br>");
				}


			} else{
				array_push($error, "Girdiğiniz Kod Yanlış<br>");
			}
		}
		else {
			array_push($error, "Girdiğiniz Şifreler Birbiriyle Uyuşmuyor<br>");
		}
	}
	else {
		array_push($error, "Lütfen tüm alanları eksiksiz doldurun<br>");
	}

	
	
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Change Password</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/sifre_degistir_style.css">
		
	</head>
	<body>

<div class="wrapper">
	<div class="login_box">
		<div class="login_header">
			<div class="logo">
				<img src="artboard.png">
			</div>
		</div>

			<div id="second">
				<form action="" method="POST">
				
					<input type="email" name="sifre_email" class="c" placeholder="Email Adresiniz">
					<input type="text" name="code" placeholder="Emailinize Gelen Kod">
				
				     <?php if(in_array("Girdiğiniz Kod Yanlış<br>", $error)){
					  	 		echo "Girdiğiniz Kod Yanlış<br>";
							}    ?>
					<input type="password" name="sifre1" class="c" placeholder="Yeni Şifreniz">
					<input type="password" name="sifre2" class="c" placeholder="Yeni Şifreniz Tekrar">
				    <br>
					<?php if(in_array("Girdiğiniz Şifreler Birbiriyle Uyuşmuyor<br>", $error)){
						echo "Girdiğiniz Şifreler Birbiriyle Uyuşmuyor<br>";
					} ?>
					<button>Şifremi Güncelle</button>
					<br><?php if(in_array("Lütfen tüm alanları eksiksiz doldurun<br>", $error)){
									echo "Lütfen tüm alanları eksiksiz doldurun<br>";
				   				}
				  	
								elseif(in_array("Bir hata oluştu<br>", $error)){
									echo "Bir hata oluştu<br>";
								}			
								elseif(in_array("Şifre başarıyla değiştirildi<br>", $error)){
									echo "Şifre başarıyla değiştirildi<br>";
								}
							 ?>
							 <br>
							 <a href="register.php">Giriş Yap</a>

   				</form>
			</div>
	</div>
</div>

	</body>
</html>