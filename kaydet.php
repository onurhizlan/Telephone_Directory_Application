<?php
error_reporting(0);
if($_POST['ekle']) {
  $ad = $_POST['ad'];
 $soyad = $_POST['soyad'];
 $adres = $_POST['adres'];
 $telefon = $_POST['telefon'];
 $email = $_POST['email'];

$baglan=mysqli_connect("localhost","root","","onurhizlan"); 
mysqli_set_charset($baglan, "utf8");
 
$sql="select telefon from onurhizlan WHERE telefon='$telefon'";
 
 

 
$sonuc1= mysqli_query($baglan,$sql);
$satirsay=mysqli_num_rows($sonuc1);
 
if ($satirsay>0)
{
echo "Bu Telefon Numarası daha önce kaydedilmiş";
 
} else{
$sqlekle="INSERT INTO deneme(ad, soyad, adres, telefon, email) 
VALUES ('$ad','$soyad','$adres','$telefon','$email')";
 
$sonuc=mysqli_query($baglan,$sqlekle);
 
if ($sonuc==0)
echo "Eklenemedi,Bu Telefon Numarası daha önce kaydedilmiş, kontrol ediniz";
 
	
else
echo "Başarıyla eklendi, 2 sn. sonra yönlendirileceksiniz.";
header( "refresh:2;url=index.php" );
};
 
}

if($_POST["sil"]) {
  $ad = $_POST['ad'];
 $soyad = $_POST['soyad'];
 $adres = $_POST['adres'];
 $telefon = $_POST['telefon'];
 $email = $_POST['email'];
  
  
	

$baglan=mysqli_connect("localhost","root","","onurhizlan");
mysqli_set_charset($baglan, "utf8");
 
$sonuc=mysqli_query($baglan,"DELETE from deneme  where telefon='$telefon'");
 
if($sonuc>0	){
echo "Başarıyla silindi,2 sn. sonra yönlendirileceksiniz.";
header( "refresh:2;url=index.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
  
}

if($_POST['guncelle']) {
  $ad = $_POST['ad'];
 $soyad = $_POST['soyad'];
 $adres = $_POST['adres'];
 $telefon = $_POST['telefon'];
 $email = $_POST['email'];

$baglan=mysqli_connect("localhost","root","","onurhizlan"); 
mysqli_set_charset($baglan, "utf8");
 
$sql = "UPDATE deneme SET ad='$ad',  soyad='$soyad', adres='$adres', telefon='$telefon', email='$email'  WHERE telefon='$telefon'";
 
 

$sonuc= mysqli_query($baglan,$sql);
if($sonuc>0) 
{ 

echo 'Başarıyla güncellendi;';
echo "<br><br>";
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
 
header( "refresh:2;url=index.php" );

 
}

 
?>



