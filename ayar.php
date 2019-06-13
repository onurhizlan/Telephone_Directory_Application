<?php 


   try {
	   
	  $db = new PDO("mysql:host=localhost;dbname=onurhizlan;charset=utf8","root",""); 
	   
   }catch (PDOException $mesaj) {
	   
	  echo $mesaj->getmessage(); 
	   
   }


?>