<?php 
  error_reporting(0);
   include("ayar.php");
   
   sleep(1);

  $value = $_POST["value"];
  
  $getName = $_REQUEST["namee"];
  
  if(!$value){
	  
	  echo "";
	  
  }else {
	  
	  
	  $row = $db->prepare("select * from deneme where ad='$getName'");
	  $row->execute(array("%".$value."%"));
	  $goster = $row->fetchAll(PDO::FETCH_ASSOC);
	  $x = $row->rowCount();
	  
	   if($x){
		   
		   foreach($goster as $liste){
			   
			   echo $liste["ad"] . "*" . $liste["adres"] . "*" . $liste["telefon"] . "*" . $liste["email"] ;
			   
			   /*   echo "<a href=''>".$liste["adres"]."</a><br />"; ---> arama sonucu çıkan isimlere link vermek için kullanılır*/
		   }
		   
	   }else {
		   
		   echo "";
		   
	   }
	  
  }


?>
