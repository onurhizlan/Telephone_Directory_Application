<html>
 
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="new1.css">
</head>
 
<body>
<table border="1" align="center" width="500">

<br>
<tr>
<td>ad</td>
<td>soyad</td>
<td>adres</td>
<td>telefon</td>
<td>email</td>


</tr>

<?php
$baglan=mysqli_connect("localhost","root","","onurhizlan");
mysqli_set_charset($baglan, "utf8");
$sonuc=mysqli_query($baglan,"select * from deneme"); 
 
while($satir=mysqli_fetch_array($sonuc))
{
	
echo '<tr>';
echo '<td>'.$satir['ad'].'</td>';
echo '<td>'.$satir['soyad'].'</td>';
echo '<td>'.$satir['adres'].'</td>';
echo '<td>'.$satir['telefon'].'</td>';
echo '<td>'.$satir['email'].'</td>';

echo '</tr>';
}
?>
 
 
 
</table>
<br>
  <a href="index.php">
  <img src="images/return.png"  style="width:42px;height:42px;border:0;">
</a>
</body>
</html>
 
<script language="JavaScript">
function uyari() {
 
if (confirm("Bu kaydı silmek istediğinize emin misiniz?"))
   return true;
else 
   return false;
}
</script>