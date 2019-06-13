<?php
$ogrID= $_POST['telefon'];
 
 $ad = $_POST['ad'];
 $soyad = $_POST['soyad'];
 $adres = $_POST['adres'];
 $telefon = $_POST['telefon'];
 $email = $_POST['email'];


//Veritabanına bağlanıyoruz.
$baglan=mysqli_connect("localhost","root","","onurhizlan"); 
mysqli_set_charset($baglan, "utf8");

//güncelleme için SQL sorgumuzu yazıyoruz.
$sql = "UPDATE deneme SET ad='$ad',  soyad='$soyad', adres='$adres', telefon='$telefon', email='$email'  WHERE telefon='$ogrID'";
 
//sorgumuzu çalıştırıyoruz
$sonuc= mysqli_query($baglan,$sql);
if($sonuc>0) 
{ 
echo '<center><img src="images/save.png" width="64">';
echo "<br>";
echo 'Başarıyla güncellendi;';
echo "<br><br>";
echo '<a href=listele.php>Kayıtları Görmek İçin Tıklayın</a></center>';
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
 
?>