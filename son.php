<?php 


include 'config/config.php';

$error_array = array();
 if($_POST){
     $email = strip_tags($_POST['email']);
     $code = strip_tags($_POST['code']);
     $sifre1 = strip_tags($_POST['sifre1']);
     $sifre2 = strip_tags($_POST['sifre2']);
     if($email!="" and $code!="" and $sifre1!="" and $sifre2!=""){
         if($sifre1 == $sifre2){
             $s = $con->query("select * from users where code='".$code."' and email='".$email."'");
             $c = mysqli_num_rows($s);
             if($c!=0){

                if($con->query("update users set password='".md5($sifre1)."', code='' where email='".$email."'"))
                {
                    array_push($error_array, "sifre degistirildi<br>");
                } 
                else {
                    array_push($error_array, "bir hata var<br>");
                }

             }else {
                 array_push($error_array, "kod yanlis<br>");
             }
         } else{
            array_push($error_array, "sifreler uyusmuyor<br>");
         }
     } else {
         array_push($error_array, "tum alanlari eksiksiz doldurun<br>");
     }
 }







?>
<style>
    .input{
        padding:10px;
        background-color:#eee;

    }
    .c{
        width: 25%;
        padding: 10px;
        margin-bottom: 10px;
    }
    .btn{
        padding: 10px;
    }
</style>


<form action="" method="POST">
    <div class="input">
        <input type="email" name="email" class="c" placeholder="email">
    </div>
    <div class="input">
        <input type="text" name="code" class="c" placeholder="code">
    </div>
    <div class="input">
        <input type="password" name="sifre1" class="c" placeholder="sifre1"> 
    </div>
    <div class="input">
        <input type="password" name="sifre2" class="c" placeholder="sifre2">
    </div>
    <br><?php if(in_array("tum alanlari eksiksiz doldurun<br>", $error_array)){
        echo "tum alanlari eksiksiz doldurun<br>";
    } ?>
    <button class="btn">Change</button>
</form>