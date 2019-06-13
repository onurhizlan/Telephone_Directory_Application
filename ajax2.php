<?php 
  error_reporting(0);
   include("ayar.php");
   
   sleep(1);

  $value = $_POST["value"];
  
  if(!$value){
	  
	  echo "";
	  
  }else {
	  
	  
	  $row = $db->prepare("select * from deneme where soyad like  '%".$value."%'");
	  $row->execute(array("%".$value."%"));
	  $goster = $row->fetchAll(PDO::FETCH_ASSOC);
	  $x = $row->rowCount();
	  
	   if($x){
		   
		   foreach($goster as $liste){
			   
			echo "<a onclick='getUserInformation2(&quot;"; 
		   echo $liste["telefon"];
		   echo "&quot;)' href='#'>".$liste["soyad"]."</a><br />";
			   
			   /*   echo "<a href=''>".$liste["soyad"]."</a><br />"; ---> arama sonucu çıkan isimlere link vermek için kullanılır*/
		   }
		   
	   }else {
		   
		   echo "";
		   
	   }
	  
  }


?>
