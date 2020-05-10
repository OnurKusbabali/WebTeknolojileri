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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Font/Montserrat-ThinItalic.ttf">
    <link rel="stylesheet" href="Font/font.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Mirasımız</title>
</head>

<body>
    <div class="bg-img">

        <img src="img/gece.jpg" alt="">

    </div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href="#">Memleketim ve Ben</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
                    <img style="width: 100%;" src="https://img.fanatik.com.tr/img/78/1200x695/5eb6a4d2ae298bfa1c556b4f.gif" alt="Gençlerbirliği">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-column">

                <div class="row about-card-text">
                    <h3 class="about-card-title">
                        Şehrimin Takımı Gençlerbirliği
                    </h3>
                    <p class="about-card-p">
                        Gençlerbirliği Spor Kulübü, Süper Lig'de mücadele eden futbol şubesi ile tanınan dernek yapısındaki Türk spor kulübü. 14 Mart 1923'te Ankara'da kurulan kulüp, Cumhuriyet ile aynı yıl kurulması nedeniyle Cumhuriyet Takımı olarak da anılmaktadır. Forma renkleri kırmızı-siyahtır.

                    Ankara Sultanisi'nde okumakta olan bir grup öğrencinin girişimleriyle bir futbol kulübü olarak kurulan Gençlerbirliği,[ kurulduktan hemen sonra Ankara Futbol Ligi'ne katılmış ve otuz dört sezon boyunca bu ligde mücadele etmiştir. İlk ciddi başarısını 1929-30 sezonunda Ankara Futbol Ligi'nde şampiyon olarak yakalamıştır. Mücadele ettiği bu sezonlarda toplam on kez şampiyon olarak ligdeki en başarılı takım olmuştur.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>