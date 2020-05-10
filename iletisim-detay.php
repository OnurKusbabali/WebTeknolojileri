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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="Font/Montserrat-ThinItalic.ttf" />
    <link rel="stylesheet" href="Font/font.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />


    <title>İletişim</title>
</head>

<body>
    <div class="bg-img">
        <img src="img/gece.jpg" alt="" />
    </div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-column">
                <h4 style="font-weight: 700; margin-bottom: 2rem;">İletişim-Detay</h4>
                <?php

                $mail = $_POST["email"];
                $adSoyad = $_POST["adSoyad"];
                $mesaj = $_POST["message"];

                echo '<div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" id="emailForm" value="' . $mail . '" disabled/>
            </div>
            <div class="form-group">
                <label>Ad Soyad</label>
                <input type="text" class="form-control" placeholder="Ad Soyad" value="' . $adSoyad . '" disabled/>
            </div>
            <div class="form-group">
                <label>Mesaj</label>
                <input type="text" class="form-control" placeholder="Mesajınız" value="' . $mesaj . '" disabled/>
            </div>';
                ?>


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