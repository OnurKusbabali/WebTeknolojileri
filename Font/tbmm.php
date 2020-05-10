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

    <title>TBMM</title>
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
                    <img style="width: 100%;" src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Atat%C3%BCrk_TBMM%27den_%C3%A7%C4%B1karken.jpg" alt="TBMM">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-column">

                <div class="row about-card-text">
                    <h3 class="about-card-title">
                        TBMM
                    </h3>
                    <p class="about-card-p">
                        Türk siyasi tarihinde ilk parlamento Osmanlı döneminde İstanbul'da Dolmabahçe Sarayı'nda yapılan
                        törenle 19 Mart 1877'de açıldı. Bu meclis Kanuni Esasi'ye göre "Meclis-i umumi" olarak
                        adlandırılmıştı. "Ayan meclisi" ve "Meclis-i Mebusan" olmak üzere iki kısımdan oluşan bu meclis,
                        ilk oturumunu 20 Mart 1877 tarihinde Sultanahmet'teki İstanbul Üniversitesi binasında yaptı.
                        Kısa süren bu meclis 93 Harbi nedeniyle dağıldı. Daha sonra yapılan ikinci genel seçimlerin
                        ardından 18 Aralık 1877'de yeniden açılan meclis, Kanuni Esasi'nin verdiği yetkiyle padişah II.
                        Abdülhamit tarafından 14 Şubat 1878'de kapandı.

                        1908'de bir seçim kanunu dikkate alınarak ilk seçim yapıldı. Seçme yaşı 25, seçilme yaşı 30 olan
                        bu seçimlerde vergi ödeyenler oy kullanabiliyordu. 17 Aralık 1908'de yeniden açılan meclis,
                        İstanbul'un işgali'ne kadar açık kaldı. Üç yıl sonra ise İstanbul'da ilk kez bir ara seçim
                        yapıldı. Osmanlı Devleti'nin I. Dünya Savaşı'ndan yenilgiyle çıkmasından sonra bu meclis Mondros
                        Ateşkes Anlaşması sonrasında İstanbul'un işgali nedeniyle 11 Nisan 1920'de resmen kapandı.
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