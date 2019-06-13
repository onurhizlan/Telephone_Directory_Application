<?php
include("inc/fonk.php"); //veri tabanı bağlantısı ve gerekli fonksiyonu barındıran sayfamızı dahil ediyoruz.
$id = $_GET["id"]; //id değerimizi alıyoruz.
$sorgu = $baglanti->query("select baslik,icerik from panel where id=" . (int)$id); //sorgumuzu oluşturuyoruz

$sonuc = $sorgu->fetch_assoc(); //sonucları alıyoruz ve gerekl yerlerde yazdırıyoruz

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Şablon ee</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<!--<h1>Merhaba, Dünya!</h1>-->
<div class="container-fluid">

    <!--nav bar başladı -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <!-- Daha iyi mobil görüntü için marka ve aç/kapa gruplanıyor -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#aa">
                    <span class="sr-only">Navigasyonu aç/kapa</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Bootstrap ile Tasarım</a>
            </div>
            <!-- Aç/kapa için nav kısayollarını, formu ve diğer içeriği bir araya topla -->
            <div class="collapse navbar-collapse" id="aa">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="anasayfa">Ana Sayfa</a></li>
                    <li><a href="#">Hakkımızda</a></li>
                    <li><a href="#">Projeler2</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projeler
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Proje 1</a></li>
                            <li class="divider"></li>
                            <li class="disabled"><a href="#">Proje 2</a></li>
                            <li><a href="#">Proje 3</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Proje 4</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-aç/kapa -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- nav bar bitti -->
    <div class="jumbotron">
        <h1><?php echo $sonuc["baslik"] ?></h1>
        <p><?php echo $sonuc["icerik"] ?></p>

    </div>
    <!-- jumbotron bitti-->

    <!-- Grid Yapısı başladı-->


</div>


</body>
</html>