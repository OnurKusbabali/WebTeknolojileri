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

    <title>Eğitim</title>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-column">
                <h4 style="font-weight: 700; margin-bottom: 2rem;">Eğitim</h4>
                <table class="table table-striped table-bordered table-hover" style="border-radius: 16px !important;">
                    <thead>
                        <tr>
                            <th scope="col">Okul Adı</th>
                            <th scope="col">Öğrenim Durumu</th>
                            <th scope="col">Eğitim Yılları</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sakarya Üniversitesi</td>
                            <td>Üniversite</td>
                            <td>2017-</td>
                        </tr>
                        <tr>
                            <td>Başkent Üniversitesi</td>
                            <td>Üniversite</td>
                            <td>2016-2017</td>
                        </tr>
                        <tr>
                            <td>Nesibe Aydın Yıldızlar Temel Lisesi</td>
                            <td>Lise</td>
                            <td>2015-2016</td>
                        </tr>
                        <tr>
                            <td>Nermin Mehmet Çekiç  Anadolu Lisesi</td>
                            <td>Lise</td>
                            <td>2014-2015</td>
                        </tr>
                        <tr>
                            <td>Süleyman Demirel Anadlu Lisesi</td>
                            <td>Lise</td>
                            <td>2011-2014</td>
                        </tr>
                        <tr>
                            <td>Necmi Şahin İlköğretim okulu</td>
                            <td>İlköğretim</td>
                            <td>2010-2011</td>
                        </tr>
                        <tr>
                            <td>Orhan Eren İlköğretim okulu</td>
                            <td>İlköğretim</td>
                            <td>2003-2010</td>
                        </tr>
                    </tbody>
                </table>
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