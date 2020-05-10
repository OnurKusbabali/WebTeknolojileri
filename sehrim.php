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

    <title>Şehrim</title>
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
                <h4 style="font-weight: 700; margin-bottom: 2rem;">Şehrim</h4>

                <div id="carouselExampleControls" class="carousel slide slider-ortala" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block h-500" src="https://cdn.galaxy.tf/thumb/sizeW2000/uploads/2s/cms_image/001/555/994/1555994075_5cbe95db8dc3e-thumb.jpg" alt="Atakule">
                            <div class="carousel-caption d-md-block">
                                <h3>Atakule</h3>
                                <a href="atakule.php" target="_blank">
                                    <div class="btn btn-outline-light btn-sm padding-0">Detaylı Bilgi</div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block h-500" src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Atat%C3%BCrk_TBMM%27den_%C3%A7%C4%B1karken.jpg" alt="TBMM">
                            <div class="carousel-caption d-md-block">
                                <h3>TBMM</h3>
                                <a href="tbmm.php" target="_blank">
                                    <div class="btn btn-outline-light btn-sm padding-0">Detaylı Bilgi</div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block h-500" src="https://www.meshur.co/wp-content/uploads/2018/09/ANKARA_KALESI_01.jpg" alt="Ankara Kulesi">
                            <div class="carousel-caption d-md-block">
                                <h3>Ankara Kalesi</h3>
                                <a href="ankaraKalesi.php" target="_blank">
                                    <div class="btn btn-outline-light btn-sm padding-0">Detaylı Bilgi</div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block h-500" src="https://res.cloudinary.com/dwdzl6i3g/image/upload/$wpsize_!_cld_full!,w_1280,h_720,c_scale/v1585827701//Ankapark-Gece-Goruntusu.jpg" alt="Ankapark">
                            <div class="carousel-caption d-md-block">
                                <h3>Ankapark</h3>
                                <a href="ankapark.php" target="_blank">
                                    <div class="btn btn-outline-light btn-sm padding-0">Detaylı Bilgi</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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