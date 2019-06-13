<?php
 

$silinecekID= $_GET['id'];
	

 
$baglan=mysqli_connect("localhost","root","","onurhizlan");
mysqli_set_charset($baglan, "utf8");
 
$sonuc=mysqli_query($baglan,"DELETE from deneme  where telefon=".$silinecekID);
 
if($sonuc>0	){
echo "Başarıyla silindi,2 sn. sonra yönlendirileceksiniz.";
header( "refresh:2;url=index.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
 
?>