<?php 

   try {
	   
	  $db = new PDO("mysql:host=localhost;dbname=onurhizlan;charset=utf8","root",""); 
	   
   }catch (PDOException $mesaj) {
	   
	  echo $mesaj->getmessage(); 
	   
   }


$aranacak=@$_GET["deger"];//kelimeyi alıyoruz.

$al=mysqli_query("SELECT * FROM deneme WHERE ad='$aranacak'");

//etiket tablosunda taratıyoruz bulunan verileri alıyoruz.

while($yaz=mysqli_fetch_array($al)){

$veriler = array();
$veriler['ad'] = $yaz["ad"];
$veriler['soyad'] = $yaz["soyad"];
$veriler['adres'] = $yaz["adres"];

//verileri json formatına çeviriyoruz
echo json_encode($veriler);

}
?>