<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width-device-width, initial-scale-1, maximum-scale=1">
    <title>Eğitim Edin</title>
    <link rel="stylesheet" href="css/egitimler-page-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
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
</head>

<body>
    <div id="page-wrap">
        <div class="upper">

            <a class="title" href="index.php"><img class="solustyazi" src="resimler/solustyazi.png" alt=""></a>

            <div id="dropbutton"></div>
            <ul id="firsthidden">
                <li>
                    <a href="egitimler-page.php">Eğitimler</a>
                </li>

                <li id="listdrop">
                    <a href="#">Bize Ulaşın</a>
                    <ul id="hidden">
                        <li>
                            <a href="mailto:girisimc1instagram@gmail.com"><i class="fas fa-envelope"></i> E-posta</a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/girisimc1/?hl=tr"><i class="fab fa-instagram"></i> İnstagram</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="register.php">Giriş Yap</a>
                </li>
            </ul>
        </div>
        <div class="main">

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <a href="egitim.php" title="Eğitimi Önizlemek için Tıklayın">
                            <img src="resimler/girisimcion.png" alt="Avatar" style="width:100%;height:100%px;">
                        </a>
                    </div>
                    <div class="flip-card-back">
                        <a href="egitim1.php" title="Eğitimi Önizlemek için Tıklayın">
                            <img src="resimler/girisimciarka.png" alt="Avatar" style="width:100%;height:100%px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <a href="egitim-pazarlama.php" title="Eğitimi Önizlemek için Tıklayın">
                            <img src="resimler/pazarlamaon.png" alt="Avatar" style="width:100%;height:100%px;">
                        </a>
                    </div>
                    <div class="flip-card-back">
                        <a href="egitim-pazarlama.php" title="Eğitimi Önizlemek için Tıklayın">
                            <img src="resimler/pazarlamaarka.png" alt="Avatar" style="width:100%;height:100%px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-card" id="ucuncukart">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <a href="egitim-dijitalmedya.php" title="Eğitimi Önizlemek için Tıklayın">
                            <img src="resimler/dijitalmedyaon.png" alt="Avatar" style="width:100%;height:100%px;">
                        </a>
                    </div>
                    <div class="flip-card-back">
                        <a href="egitim-dijitalmedya.php" title="Eğitimi Önizlemek için Tıklayın">
                            <img src="resimler/dijitalmedyaarka.png" alt="" style="width:100%;height:100%px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <a href="egitim-markalasma.php" title="Eğitimi Önizlemek için Tıklayın">
                            <img src="resimler/markalasmaon.png" alt="Avatar" style="width:100%;height:100%px;">
                        </a>
                    </div>
                    <div class="flip-card-back">
                        <a href="egitim-markalasma.php" title="Eğitimi Önizlemek için Tıklayın">
                            <img src="resimler/markalasmaarka.png" alt="" style="width:100%;height:100%px;">
                        </a>
                    </div>
                </div>
            </div>


        </div>
        <div class="education">
            <p><strong>"Öğrenmek pahalıdır. Cehalet ondan da pahalıdır."</strong></p>

            <strong>Henry Clausen</strong>

        <div class="loader-wrapper">
            <img src="Loading_animation/Artboard_2.png" class="rotate"/>
        </div>

        <script>
            $(window).on("load",function(){
                $(".loader-wrapper").fadeOut("slow");
            }); 
        </script>


        </div>
        <div class="under">
            <img src="resimler/poweredbycybercrone.png" width="300px" height="63px" class="poweredby" alt="">
        </div>
    </div>
</body>

</html>
