<!DOCTYPE html>
<html>
<body>
<?php 


   try {
	   
	  $db = new PDO("mysql:host=localhost;dbname=onurhizlan;charset=utf8","root",""); 
	   
   }catch (PDOException $mesaj) {
	   
	  echo $mesaj->getmessage(); 
	   
   }

   
   
   
	$page=$_GET["ad"];
	
	if($page=="" || $page=="1")
	{
	$page1=0;
	}
	else
	{
	$page1==($page*5)-5;
	}	
   
   
   $res=mysql_query("select * from paging limit $page,5");
   while($row=mysql_fetch_array($res))
   {
	   echo $row["ad"]." ".$row["soyad"];
	   echo  "<br>";
   }
    
   
//this issdfsdgfdsg   

$res1=mysql_query("select * from deneme");
$cou=mysql_num_rows($res);

$a=$cou/5;
$a=ceil($a);
echo "<br>"; echo "<br>"; 
	for($b=1; $b<=$a; $b++)
	{
		?><a href="paging.php?page=<?php echo $b; ?>" style="text-decoration:none "><?php echo $b." "; ?></a><?php
		}
		
		?>

	
	
	
	</body>
	</html>