<?php 
$num_rec_per_page=10;
mysqli_connect("localhost", "root", "", "onurhizlan");

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM deneme LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query ($sql); //Sorguyu çalıştır
?> 
<table>
<tr><td>Name</td><td>Phone</td></tr>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
            <tr>
            <td><?php echo $row['ad']; ?></td>
            <td><?php echo $row['soyad']; ?></td>            
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT * FROM deneme"; 
$rs_result = mysql_query($sql); //Sorguyu çalıştır
$total_records = mysql_num_rows($rs_result);  //kayıt sayısı
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a href='index.php?page=1'>".'|<'."</a> "; // ilk sayfaya git

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='sayfalama.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='sayfalama.php?page=$total_pages'>".'>|'."</a> "; // son sayafaya git
?>