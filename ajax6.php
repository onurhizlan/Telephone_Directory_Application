<?php 
  error_reporting(0);
   include("ayar.php");
   
   sleep(1);

  $value = urldecode($_POST["value"]);
  
  $getName = $_REQUEST["name"];
  
  if(!$value){
	  
	  echo "";
	  
  }else {
	  
	  
	  $row = $db->prepare("select * from deneme where telefon='$getName'");
	  $row->execute(array("%".$value."%"));
	  $goster = $row->fetchAll(PDO::FETCH_ASSOC);
	  $x = $row->rowCount();
	  
	   if($x){
		   
		   foreach($goster as $liste){
			   
			   echo $liste["ad"] . "*" . $liste["adres"] . "*" . $liste["soyad"] . "*" . $liste["email"]."*" ;
			   
			   /*   echo "<a href=''>".$liste["adres"]."</a><br />"; ---> arama sonucu çıkan isimlere link vermek için kullanılır*/
		   }
		   
	   }else {
		   
		   echo "";
		   
	   }
	  
  }


?>
