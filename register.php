<?php 

include 'config/config.php';
include 'form_handlers/register_handler.php';
include 'form_handlers/login_handler.php';


 ?>

 <!DOCTYPE html>
 <html lang="tr">
 <head>
 	<meta charset="utf-8">
 	<title>Girisimci</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/register.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
 </head>
 <body>
 	<?php if (isset($_POST["register_button"])) {
    echo '
    <script>

    $(document).ready(function(){
        $("#first").hide();
        $("#second").show();

        })



    </script>


    ';
} ?>

 	<div class="wrapper">
 		<div class="login_box">
 			<div class="login_header">
 				<div class="logo">
 					<img src="artboard.png">
 				</div>

 			</div>

 			<!-- Login Start -->
 			<div id="first">
 				<form action="register.php" method="POST">
 					<input type="email" name="log_email" placeholder="Email Adresiniz" value="<?php if(isset($_SESSION['log_email'])) {
 						echo $_SESSION['log_email'];
 					} ?>" required>
 					<br>
 					<input type="password" name="log_password" placeholder="Şifreniz">
 					<br><?php 
 					if (in_array("Email Adresiniz ya da parolanız hatalı<br>", $error_array)) {
 					 	echo "Email Adresiniz ya da parolanız hatalı<br>";
 					 } ?>
 					 <a href="sifre.php" class="forgetten">Şifremi Unuttum</a>
 					 <br>
 					<input type="submit" name="login_button" value="Giriş Yap">
 					<br>
 					<a href="#" id="signup" class="signup">Hesabınız Yok Mu? Kayıt Olun</a>
 				</form>

 			</div>

 			<!-- Login END -->


 			<!-- kayit ol baslangic -->
 		 <div id="second">
			 <form action="register.php" method="POST">
				<input type="text" name="reg_fname" placeholder="Adınız" value="<?php if(isset($_SESSION['reg_fname'])) {
					echo $_SESSION['reg_fname'];
				} 

				?>" required>
				<br>
				<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Adınız 2 ile 25 karakter arasında olmalı<br>"; ?>
				
				<input type="text" name="reg_lname" placeholder="Soyadınız" value="<?php 
				if(isset($_SESSION['reg_lname'])) {
					echo $_SESSION['reg_lname'];
				}

				?>" required>
				<br><?php
				if (in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) {
					echo "Soyadınız 2 ile 25 karakter arasında olmalı<br>";
				}

				 ?>
				<input type="email" name="reg_email" placeholder="Email Adresiniz" value="<?php if(isset($_SESSION['reg_email']))
				echo $_SESSION['reg_email'];
				 ?>" required>
				<br><?php 
                if (in_array( "Email already in use<br>", $error_array)) 
                	echo "Bu Email daha önce kullanılmış<br>";
                	else if(in_array("Invalid email format<br>", $error_array))
                		echo "Yanlış formda email<br>";

				?>
				<input type="text" name="reg_instagram" placeholder="İnstagram Adresiniz" value="<?php if(isset($_SESSION['reg_instagram'])) echo $_SESSION['reg_instagram']; ?>" required>
				<br><?php 
				if (in_array("Your instagram adress must be less than 100 characters<br>", $error_array)) {
				 	echo "İnstagram adresiniz 100 karakterden daha az olmalı!";
				 } ?>
				<input type="text" name="reg_city" placeholder="Yaşadığınız Şehir" value="<?php if(isset($_SESSION['reg_ciy'])) echo $_SESSION['reg_city']; ?>" required>
				<br><?php 
				if (in_array("Your city name must be less than 100 characters<br>", $error_array)) {
				 	echo "Yaşadığınız şehrin ismi 100 karakterden daha az olmalı!";
				 } ?>
				<input type="text" name="reg_job" placeholder="Mesleğiniz" value="<?php if(isset($_SESSION['reg_job'])) echo $_SESSION['reg_instagram']; ?>" required>
				<br><?php 
				if (in_array("Your job name must be less than 100 characters<br>", $error_array)) {
				 	echo "Mesleğiniz 100 karakterden daha az olmalı!";
				 } ?>
				<input type="password" name="reg_password" placeholder="Şifreniz" required>
				<br>
				<input type="password" name="reg_password2" placeholder="Şifreniz Tekrar" required>
				<br>
				<?php if (in_array("Your passwords don't match<br>", $error_array)) 
					echo "Parolalar Eşleşmiyor!<br>";
					else if(in_array("Your password can only contain English characters or numbers<br>", $error_array)) 
						echo "Parolanız İngilizce karakter veya sayılardan oluşmalı!";
					else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array))
						echo "Parolanız 5 ile 30 karakter arasında olmalı";
				 ?>
				<br>
				<input type="submit" name="register_button" value="Kayıt Ol">
				<br>


				<?php if(in_array("<span style='color: #14C800;'>Kayıt tamamdır. Giriş yapabilirsin!</span><br>", $error_array)) echo "<span style='color: #14C800;'>Kayıt tamamdır. Giriş yapabilirsin!</span><br>"; ?>
				<a href="#" id="signin" class="signin">
					Hesabın var mı? Giriş Yap!
				</a>
			 </form>
 		 </div>
	 </div>
	 	<img class="gece" src="resimler/poweredbycybercrone.png" width="300px" height="63px" class="poweredby" alt="">
 	</div>
 	
 		

	 
	    <div class="loader-wrapper">
            <img src="Loading_animation/Artboard_2.png" class="rotate"/>
        </div>

        <script>
            $(window).on("load",function(){
                $(".loader-wrapper").fadeOut("slow");
            }); 
        </script>





 
 </body>
 </html>