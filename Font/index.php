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
    
    <title>Memleketim ve Ben</title>

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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="img-about">
                    <img src="img/Ben.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 about-column">

                <div class="row about-card-text">

                    <h3 class="about-card-title">
                        Kısaca Ben
                    </h3>
                    <p class="about-card-p">
                       Merhaba benim adım Onur. 21 yaşındayım üniversite 3.sınıf bilgisayar mühendisliği bölümünde okuyorum.Ankara'da yaşıyorum. İlkokulu Orhan Eren İlköğretim okulunda okudum ardından 8.sınıfta Necmi Şahin ilköğretim okuluna geçtim.Liseyi 3.sınıfa kadar Süleyman Demirel Anadolu Lisesinde 3.sınıfta ise Nermin Mehmet Çekiç Anadolu Lisesinde okudum. Lise hayatım boyunca profesyonel olarak voleybol oynadım,2 ilçe şampiyonluğum b kümesinde Ankara 6.lığım ve Nermin Mehmet Çekiç Anadolu Lisesindeyken a kümesinde Ankara 5.liğim oldu. 4.sınıfta Nesibe Aydın Yıldızlar Temel Lisesine geçiş yaptım üniversite sınavında 72.000 olarak ilk olarak Başkent Üniversitesine %50 burslu olarak Bilgisayar Mühendisliğine geçiş yaptım.Başkentte yarım dönem hazırlık okuduktan sonra okulu dondurdum ve 1.sınıfta Sakarya Üniversitesine geldim.
                    </p>
                </div>
                <div class="row about-card-icons">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 hobies-icons">
                        <ul class="hobies">
                            <h5>HOBİLER</h5>

                            <li class="hobies-item">Voleybol</li>
                            <li class="hobies-item">Müzik</li>
                            <li class="hobies-item">Teknoloji</li>
                            <li class="hobies-item">Yemek Yapımı</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 social-icons">
                        <ul class="social">
                            <li class="social-item"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                            <li class="social-item"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                            <li class="social-item"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                            <li class="social-item"><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                        </ul>
                    </div>
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