<?php 
  
   include("ayar.php");
   
   sleep(1);

  $value = $_POST["value"];
  
  if(!$value){
	  
	  echo "bir kelime girmeniz gerekiyor..";
	  
  }else {
	  
	  
	  $row = $db->prepare("select * from deneme where ad like  ?");
	  $row->execute(array("%".$value."%"));
	  $goster = $row->fetchAll(PDO::FETCH_ASSOC);
	  $x = $row->rowCount();
	  
	   if($x){
		   
		   foreach($goster as $liste){
			   
			   echo $liste["ad"]."<br />";
			   
			   /*   echo "<a href=''>".$liste["ad"]."</a><br />"; ---> arama sonucu çıkan isimlere link vermek için kullanılır*/
		   }
		   
	   }else {
		   
		   echo "aradıgınız kelimeye ait hiç sonuc bulunamadı..";
		   
	   }
	  
  }


?>