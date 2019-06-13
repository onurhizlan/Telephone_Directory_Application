	<?php
    $key=$_GET['key'];
	    $array = array();
	$baglan=mysqli_connect("localhost","root","","onurhizlan"); 
mysqli_set_charset($baglan, "utf8");


    $query=mysqli_query($baglan,"select * from deneme where ad LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['ad'];
    }
    echo json_encode($array);
?>