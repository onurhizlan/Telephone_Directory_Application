<?php
include("inc/fonk.php"); //veri tabanı bağlantısı ve gerekli fonksiyonu barındıran sayfamızı dahil ediyoruz.
include("inc/page/Pagination.class.php"); //sayfalama sınıfını dahil ediyoruz
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

    <!-- Grid Yapısı başladı-->


    <?php
    $page = isset($_GET['sayfa']) ? ((int)$_GET['sayfa']) : 1;
    $toplamSorgusu= $baglanti->query("select count(*) as toplam from panel where aktif=1");
    $toplamKayit = $toplamSorgusu->fetch_assoc();
    $toplam = $toplamKayit["toplam"];   //toplam kayıt değerini değişkenimize aktardık
    $sayfaBasinaKayitSayisi = 3; // her sayfada gösterilecek kayıt sayısını tutan değişken

    $pagination = (new Pagination());
    $pagination->setCurrent($page);
    $pagination->setTotal($toplam);
    $pagination->setRPP($sayfaBasinaKayitSayisi);


    $sayfalama = $pagination->parse();
    $sayfalama = str_replace("?sayfa=", "anasayfa-", $sayfalama);
    //sayfalamanın seo ya uygun olması için ?sayfa= değeri yerine anasayfa- değeri ile değiştiriyoruz
    //Bunu sınıf içinde kodlara müdahale etmemek için burada yaptım.
    //yapmasanızda sisteminiz çalışır.


    ?>
    <div class="text-center"><?php echo $sayfalama; ?></div>
    <!-- Sayfalamayı yazdırıyoruz -->
    <div class="row">


        <?php

        $sorgu = $baglanti->query("select ozet,baslik,id from panel where aktif=1 limit " . (($page - 1) * $sayfaBasinaKayitSayisi) . "," . $sayfaBasinaKayitSayisi);
        // veri tabanımızdan panel tablosundan verileri çekiyoruz ama burada limit anahtar kelimesi ile sayfalamayı gerçekleştiriyoruz.
        // bu sayede istenilen aralıktaki kayıtlar sayfada gösterilecek
        while ($sonuc = $sorgu->fetch_assoc()) { // verileri döngü ile sayfamıza yazıyoruz
            ?>

            <div class="col-lg-4 col-xs-12">
                <div class="panel panel-primary">
                    <!-- Varsayılan panel içeriği -->
                    <div class="panel-heading"><?php echo $sonuc['id'] ?><?php echo $sonuc["baslik"] ?></div>
                    <div class="panel-body">
                        <p><?php echo $sonuc["ozet"] ?></p>
                        <p><a class="btn btn-primary btn-sm"
                              href="detay-<?php echo $sonuc['id'] . "-" . SEOLink($sonuc["baslik"]) ?>"
                              role="button">Daha fazla öğrenin</a></p>
                        <!-- SEOLink fonksiyonu ile linklerimiz seoya uygun hale geliyor. -->
                    </div>

                </div>
            </div> <!-- 1. hücre sonu-->

            <?php
        }
        ?>

    </div><!-- 1. row sonu-->


</div>
<div class="text-center"><?php echo $sayfalama; ?></div>
<!-- sayfalamayı alt taraftada yeniledim. -->

</body>
</html>