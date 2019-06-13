<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="new1.css">
   </head>
       <body>  
<?php
       
    $gID=$_GET['id'];

//Veritabanına bağlanıyoruz
$baglan=mysqli_connect("localhost","root","","onurhizlan"); 
mysqli_set_charset($baglan, "utf8");

//select sorgusu ile tblogrenci tablosundan ilgili kaydı seçiyoruz
$sql="select * from deneme WHERE telefon=".$gID;

//Sorgumuzu veritabanına gönderiyoruz.
$sonuc1= mysqli_query($baglan,$sql);

//Sorgunun sonucunda dönen satır sayısına mysql_num_rows() fonksiyonu ile bakıyoruz
$satirsay=mysqli_num_rows($sonuc1);

if ($satirsay>0)
{
    $satir = mysqli_fetch_array($sonuc1);


  
	
echo	'<table border="1" align="center">
<form class="form" action="guncelle.php" method="post">
<tr><br><br>
<td colspan="2" align="center"> Kayıt Güncelleme</td>
 
</tr>
<tr>
<td>ad</td>
<td><input type="text" name="ad" value="'.$satir['ad'].'"></td>
</tr>
<tr>
<td>soyad</td>
<td><input type="text" name="soyad" value="'.$satir['soyad'].'"></td>
</tr>
<tr>
<td>adres</td>
<td><input type="text" name="adres" value="'.$satir['adres'].'"></td>
</tr>
<tr>
<td>telefon</td>
<td><input type="text" name="telefon"  value="'.$satir['telefon'].'"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="'.$satir['email'].'"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Kaydet"></td>
</tr>
</form>

</table>
<a href="index.php">
  <img src="images/return.png"  style="width:42px;height:42px;border:0; ">
</a>';
	


} else {
echo "Aranılan kayıt bulunamadı";
echo "2 sn. sonra yönlendirileceksiniz.";
header( "refresh:2;url=index.php" ); 
}
?> 
   </body>
  
</html> 	

