<?php



$connect = mysqli_connect("localhost", "root", "", "onurhizlan");
 mysqli_set_charset($connect, "utf8");
$output = '';
if(isset($_POST["query"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM deneme 
  WHERE soyad LIKE '".$value."%' 

 ";
}
else
{
error_reporting(0);
 $query = "
  
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-striped">
    <tr>
	<div class="h2liste">
	<h2>Kayıt Listesi</h2>
		</div>
	
	<th>Ad</th>
     <th>Soyad</th>
	</div>
    </tr>

 ';
 
 // <td><a href=".$row["ad"]">'.$row["ad"].'</a></td>	 
 
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    	 
	
	<td>'.$row["ad"].'</td>
	<td>'.$row["soyad"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '';
}

?>