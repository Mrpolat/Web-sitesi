<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer-master/src/Exception.php';
require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/src/SMTP.php';



$error_array = array();

if (isset($_POST['code_button'])) {
	
	$email1 = strip_tags($_POST['sifre_email']);

	if ($email1!="") {

		$s = $con->query("select * from users where email='".$email1."'");
		$c = mysqli_num_rows($s);

		if ($c==0) {
			array_push($error_array, "Kayıtlı böyle bir kullanıcı yok<br>");
		} else {
			$code = uniqid();
			if($con->query("update users set code='".$code."' where email='".$email1."'")) {


				$mail = new PhpMailer();

				$mail->isSMTP(); 
				$mail->SMTPKeepAlive = true;
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = 'tls'; //ssl

				$mail->Port = 587; //25 , 465 , 587 
				$mail->Host = "smtp.gmail.com";

				$mail->Username = "onurozuyguzz@gmail.com";
				$mail->Password = "ozuyguzonur1402";

				$mail->setFrom("onurozuyguzz@gmail.com", "Girisimci Mantalite");
				$mail->addAddress($email1 , "Sayın Uyemiz");

				$mail->isHTML(true);
				$mail->Subject = "Girisimci Mantalite Sifre Sifirlama Kodu";
				$mail->Body = "<h1>Merhaba, Girisimci Mantalite Ailesi Uyesi</h1><p>Sifreni yenilemek icin ihtiyacin olan tek kullanimlik kod: $code</p>";

				
				if ($mail->send()) {
					echo "gonderim basarili.";
					} else {
						echo "bir hata olustu";
					}

	
				array_push($error_array, "kod mail adresine gönderildi<br>");
			} else {
				array_push($error_array, "Beklenmeyen bir hata meydana geldi<br>");
			} 


		}
		
	} else {
		array_push($error_array, "Email Alanı Doldurulması Zorunlu<br>");
	}
}

?>