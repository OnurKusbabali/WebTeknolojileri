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

    <title>Ankara Kalesi</title>
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
                    <img style="width: 100%;" src="https://www.meshur.co/wp-content/uploads/2018/09/ANKARA_KALESI_01.jpg" alt="Ankara Kalesi">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-column">

                <div class="row about-card-text">
                    <h3 class="about-card-title">
                        Ankara Kalesi
                    </h3>
                    <p class="about-card-p">
                        Ankara’ya hâkim bir tepenin üzerinde kurulmuş olan ve zaman içinde kentin simgesi haline gelen
                        Ankara Kalesi‘nin ilk yapım tarihi kesin olarak bilinmemektedir. M.Ö. 2. yüzyılda Galatlar
                        zamanında var olduğu bilinen kale daha sonra Romalılar döneminde onarım görmüştür. İç ve dış
                        kale olmak üzere iki kısımdan oluşan kalenin iç surları büyük bir ihtimalle 7. yüzyılda
                        Bizanslılar tarafından inşa edilmiştir. Daha sonra Arap saldırıları sırasında çok tahrip olan
                        kale 9. yüzyılda Bizanslılar tarafından yeniden onarılmıştır. Dış surların ne zaman eklendiği
                        kesin olarak bilinmemektedir. Kale 1073’te Selçukluların, 1101’de Haçlıların eline geçmiştir.
                        1227’de yeniden Selçukluların eline geçen kale bu dönemde ve onu takip eden Osmanlılar döneminde
                        çeşitli onarımlar görmüş, son yıllarda yapılan restorasyon çalışmalarıyla sağlamlaştırılmıştır.
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