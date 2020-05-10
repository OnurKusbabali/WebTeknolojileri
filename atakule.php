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

    <title>Atakule</title>
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
                    <img style="width: 100%;" src="https://cdn.galaxy.tf/thumb/sizeW2000/uploads/2s/cms_image/001/555/994/1555994075_5cbe95db8dc3e-thumb.jpg" alt="Atakule">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-column">

                <div class="row about-card-text">
                    <h3 class="about-card-title">
                        Atakule
                    </h3>
                    <p class="about-card-p">
                        13 Ekim 1989 tarihinde Ankara'nın başkent oluşunun 66. yıldönümüne denk gelen günde 8.
                        Cumhurbaşkanı Turgut Özal tarafından açılışı yapılan kulenin altında, Türkiye'nin ikinci ve
                        Ankara'nın ilk Alışveriş Merkezi hizmet vermeye başlamıştır.[7] Yapının adı bir yarışma sonucu
                        belirlenmiştir.[8]

                        Modern alışveriş merkezinin plan ve projesi Mimar Ragıp Buluç tarafından hazırlandı. Kutlutaş
                        İnşaat Firması ile tamamı Türk Mühendis ve işçileri tarafından inşa edilen alışveriş merkezi
                        temelleri 1987 yılında dönemin Başbakanı Turgut Özal tarafından atıldı. İsmi, düzenlenen bir
                        yarışma ile Ankara halkı tarafından verilmiştir. Mimari yapısı ve konumu itibarıyla de önemli
                        bir turizm merkezidir.12 Haziran 2011 tarihinde yeni ışıklandırmasının açılışı Recep Tayyip
                        Erdoğan tarafından yapılmıştır.

                        2012 yılı içerisinde tüm kiracılar tahliye edilmiş ve alışveriş merkezi kapanmıştır. Hâlen
                        sadece seyir terası ile mal sahibi olan Vakıflar Bankası'nın şubesi faaliyettedir. 2014 yılında
                        ise alışveriş merkezi kısmını yıkma çalışmaları başlamış, ancak temelde çıkan bir sorundan
                        dolayı kulenin de sallandığı fark edilip yıkma çalışmaları bir süre durmuştur.Büyük bir
                        tadilattan geçerek 2018 Eylül ayında tekrar faliyete geçmiştir.
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