<?php
ob_start();
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Font/Montserrat-ThinItalic.ttf">
    <link rel="stylesheet" href="Font/font.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ankapark</title>
</head>

<body>
    <div class="bg-img">

        <img src="img/gece.jpg" alt="">

    </div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href="#">Memleketim ve Ben</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-right" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Kısaca Ben</a>
                    <a class="nav-item nav-link" href="egitim.php">Eğitim</a>
                    <a class="nav-item nav-link" href="sehrim.php">Şehrim</a>
                    <a class="nav-item nav-link" href="mirasimiz.php">Mirasımız</a>
                    <a class="nav-item nav-link" href="iletisim.php">İletişim</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row about-card">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="img-about shadow mirasimiz-img" style="height: 500px; border-right: none;">
                    <img style="width: 100%;" src="https://res.cloudinary.com/dwdzl6i3g/image/upload/$wpsize_!_cld_full!,w_1280,h_720,c_scale/v1585827701//Ankapark-Gece-Goruntusu.jpg" alt="Ankapark">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-column">

                <div class="row about-card-text">
                    <h3 class="about-card-title">
                        Ankapark
                    </h3>
                    <p class="about-card-p">
                        Atatürk Orman Çiftliği arazisinde yer alan parkın yapımına 2013'te başlandı.[2] 2014'te parkın
                        da içinde yer aldığı ana imar planı ile ilgili olarak Ankara 5. İdare Mahkemesi tarafından,
                        parkın yapımına olanak veren Bakanlar Kurulu kararları hakkında da Danıştay tarafından yürütmeyi
                        durdurma kararları verildi.[3][4][5][6][7] Bu kararlara rağmen çalışmalar devam etti.[8] Ocak
                        2015'te parkın yüzde 90'ının tamamlandığı duyuruldu.[9] 2015'te Ankara 18. İdare Mahkemesi
                        tarafından bir kez daha yürütmeyi durdurma kararı verildi.[10] Bu karar üzerine belediye
                        meclisi, parkın planını değiştirdi.[11] Aynı yıl Ankara 5. İdare Mahkemesi, parkı da kapsayan
                        1/10.000'lik Koruma Amaçlı Nazım İmar Planı'nı iptal etti.[12] Danıştay ise iptal kararını
                        bozdu.[13] Aralık 2017 itibarıyla parka yapılan masrafın ₺1,5 milyar olduğu ve parkın Ağustos
                        2019'da açılmasının planlandığı açıklandı.[14] Mayıs 2018'de yirmi dokuz yıllığına belediyeye
                        tahsis edilen parkın kiralanmasına karar verildi.[15][16] İlki Haziran 2018'de yapılan beş
                        işletme ihalesinden sonuç çıkmadı.[17][18][19] 20 Eylül 2018'de gerçekleştirilen altıncı ihalede
                        park, 29 yıllığına GBM Ticaret-Çelik ortak girişim grubuna kiralandı.
                    </p>
                </div>
            </div>
        </div>
        <div id="goToTop">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>