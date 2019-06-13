<?php
  
	if($_POST){
		/*
		*	Mysql Connect
		*/
		
$baglan=mysqli_connect("localhost","root","","onurhizlan"); 
mysqli_set_charset($baglan, "utf8");
		
		/* ---------------- **/
		
		/*
		*	Veriyi Alalım ve işlemleri yapalım
		*/
		$value = mysql_real_escape_string(strip_tags(rtrim($_POST['value'])));
		if(!$value){
			echo 'bos';
		}else{
			
			$find = mysql_query("SELECT * FROM deneme WHERE ad like '$value%'");
			if(mysql_affected_rows()){
				
				while($row = mysql_fetch_assoc($find)){
					echo '<li>'.$row["ad"].'</li>';
				}
				
			}else{
				echo 'yok';
			}
		}
	}else{
		header("Location: index.php");
	}
?>