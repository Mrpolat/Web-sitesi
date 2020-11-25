<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Girişim</title>
    <link rel="stylesheet" href="egitim-style.css">
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
            
        </div>
        <div class="imgdiv">
                <img src="resimler/girisimcion.png" alt="Avatar">
            </div>
        <div class="middle">

            <h2>Girişimci Mantalite</h2>
            <ul class="middleul">
                <li class="item1">Eğitim pdf formatındadır.</li>
                <li class="item1">Önemli konularda <strong>derin öğrenme</strong> sağlamak amacıyla <strong> interaktif içerikler</strong> barındırmaktadır</li>
                <li class="item1">Bilgisayar ve mobil platformlardan erişilebilir</li>
                <li class="item1">Bu eğitimi alarak size <strong>özel danışmanlık</strong> hizmetimizi 3 ay edinmiş oluyorsunuz.</li>
                <li class="item1">Bu eğitim girişimciliğe başlamanız için size temel yapı taşlarını sunar.</li>
                <li class="item1">Bu eğitim <strong>nerden başlayacağını bilmeyenlere ve çoktan başlamış olanlara</strong> hitap eder.</li>
            </ul>

        </div>

        
            <button class="btn"><strong>EĞİTİMİ EDİN</strong></button>
            <div class="indirim">
                <img src="indirim2.png" class="indirim2" alt="">
            </div>
        


        <div class="under">
            <img src="resimler/poweredbycybercrone.png" width="300px" height="63px" class="poweredby" alt="">
        </div>
    </div>
</body>

</html>
