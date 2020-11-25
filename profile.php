<?php

include 'header.php';
include 'form_handlers/exit_handler.php';









 ?>











<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width-device-width, initial-scale-1, maximum-scale=1">
    <title>Profil olustur</title>
    <link rel="stylesheet" type="text/css" href="css/profilestyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <script src="https://kit.fontawesome.com/1d60e75e32.js" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#dropbutton").click(function() {
                $("#firsthidden").toggle();
            })
        })

    </script>
    <script type="text/javascript">
        $(function() {
            $("#listdrop").click(function() {
                $("#hidden").toggle();
            })
        })

    </script>
    <script type="text/javascript">
        $(function() {
            $("#listdropp").click(function() {
                $("#hiddenn").toggle();
            })
        })

    </script>
</head>

<body>
<div id="page-wrap">
    <div class="upper">
        
            <a class="title" href="index.php"><img class="solustyazi" src="resimler/solustyazi.png" alt=""></a>

            <div id="dropbutton"></div>
            <ul id="firsthidden">
                <li id="listdrop">
                    <a href="#">Eğitimlerim</a>
                    <ul id="hidden">
                        <li>
                            <a href="show.php">Girişimci Mantalite</a>
                        </li>
                        <li>
                            <a href="#">Pazarlama Sanatı</a>
                        </li>
                        <li>
                            <a href="#">Markalaşma</a>
                        </li>
                        <li>
                            <a href="#">Dijital Medya</a>
                        </li>

                    </ul>

                </li>

                <li id="listdropp">
                    <a href="#">Bize Ulaşın</a>
                    <ul id="hiddenn">
                        <li>
                            <a href="mailto:girisimc1instagram@gmail.com"><i class="fas fa-envelope"></i> E-posta</a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/girisimc1/?hl=tr"><i class="fab fa-instagram"></i> İnstagram</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="exit">
                        <form action="profile.php" method="POST">

                            <input class="myButton" type="submit" name="exit_button" value="Çıkış Yap">

                        </form>
                        
                    </div>
                </li>
            </ul>
        </div>

        <style>

           
            
        </style>

         <div class="alttaraf">
            <h3 class="fena">Girişimci Mantalite Ailesine Hoşgeldiniz</h3>


            
        
            <div class="backImg">
                <div class="profile">
                    

                    <div class="profileText">
                        <div>
                            <h2><?php echo "Ad Soyad: " . $user['first_name'] . " " . $user['last_name']; ?></h2>
                        </div>
                        <div>
                            <p><h2><?php echo "Şehir: " . $user['city']; ?></h2></p>
                        </div>
                        <div>
                            <h3><?php echo "Meslek: " . $user['job']; ?></h3>
                        </div>
                        <div>
                            <h3><i class="fab fa-instagram"></i><?php echo "İnstagram Adresi: " . $user['instagram']; ?></h3>
                        </div>

                    </div>
                    <div class="profilefonts"></div>
                </div>
            </div>
            <div class="hepsi">
             <div class="container">
             <?php include 'hadi.php'; ?>

            <div class="overlay">
                <div class="overlayContent">
                    <h1>GİRİŞİMCİ MANTALİTE</h1>
                    <h3><p><a href="https://www.instagram.com/girisimc1/?hl=tr"><i class="fab fa-instagram"></i> girisimci1</a></p></h3>
                </div>
            </div>
        </div>

        </div>
            <div class="enalt">
                <p>(Sercan Çetin) TR 6100 0320 0000 0000 7987 2697</p>
                <br>
                <p><font color='red'>NOT:</font> havale işlemini gerçekleştirirken açıklamaya www.girisimcimantalite.com ' a kayıt olurken kullandığınız mail adresinizi eklemeyi unutmayın!</p>
            <br>
                
                <p><font color='red'>!</font> Eğer havale işleminde veya eğitimi görüntülemede bir sorun yaşıyorsanız bize instagram DM ya da mail yoluyla ulaşabilirsiniz.</p>
            </div>

        </div>


    </div>


        <style>
                /*    .container{
                width: 30%;
                border:0px solid;
                


                position: absolute;
                top: 55%; left: 70%;
                transform: translate(-50%,-50%);

            }*/

            img{
                width: 100%;
                height: auto;
                border-radius: 5px;
            }

            .overlay{
                position: absolute;
                top:0; left:0;
                bottom:0; right:0;
                background-color: black;
                opacity: 0;
                transition: opacity 0.2s ease-in-out;
                cursor: pointer;
                border-radius: 5px;
            }

            .overlayContent{
                position: absolute;
                top:50%;
                left: 50%;
                transform: translate(-50%,-50%);

                color: white;
                font-family: Verdana;
                text-align: center;
                
            }

            .container:hover .overlay{
                opacity: 0.8;
                border-radius: 5px;
            }

            a{
                text-decoration: none; /* alttaki cizgiyi yok ediyor */

                color: #99ff00;
            }


        </style>

            <!-- image overlay hover effect -->

       



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
