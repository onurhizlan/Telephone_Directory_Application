<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta charset="UTF-8">
	<title>kolay video dersleri</title>
	<link rel="stylesheet" href="style.css" />
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">  
  
    $(function(){
         	  
	   $("#sonuc").hide();
	   
	   $("input[name=ara]").keyup(function(){
		   
		   var value  = $(this).val(); 
		   var konu   = "value="+value;
		   
		   $.ajax({
			   
			   type: "post",
               url:   "ajax.php",
               data: konu, 
			   beforeSend: function(){
				   
				  $("#sonuc").fadeIn().html('<img src="http://i.hizliresim.com/Eg605Z.gif" width="20" height="20" />'); 
				   
			   },
			   
               success: function(sonuc){
				   
				  $("#sonuc").show().html(sonuc); 
				   
			   }			   
			   
			   
		   });
		   
		   
		   
	   });
	   
	   
		
		
	});
  
  
  </script>	
</head>
<body>
	
	<div id="genel">  
	 <div id="ara"> 
	 <h2 style="margin:10px 2px ;padding:5px;border:1px solid #eee;width:300px;background:#eee">kolay video dersleri</h2>
	 <input type="text" name="ara" placeholder="birseyler arayin ?"  /> 
	 <button type="submit">ARA</button>
	 
	 </div>
	 
	 <div id="sonuc">  
	 <span>sonuc</span>
	 </div>
	
	</div>
	 
</body>
</html>