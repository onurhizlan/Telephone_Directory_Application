<?php 
  error_reporting(0);
   include("ayar.php");
   
   sleep(1);

  $value = $_POST["value"];
  
  if(!$value){
	  
	  echo "";
	  
  }else {
	  
	  
	  $row = $db->prepare("select * from deneme where email like  ?");
	  $row->execute(array("%".$value."%"));
	  $goster = $row->fetchAll(PDO::FETCH_ASSOC);
	  $x = $row->rowCount();
	  
	   if($x){
		   
		   foreach($goster as $liste){
			   
			   echo $liste["email"]."<br />";
			   
			   /*   echo "<a href=''>".$liste["soyad"]."</a><br />"; ---> arama sonucu çıkan isimlere link vermek için kullanılır*/
		   }
		   
	   }else {
		   
		   echo "";
		   
	   }
	  
  }


?>
