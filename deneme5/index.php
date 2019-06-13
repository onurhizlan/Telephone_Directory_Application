<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Eftal Yurtseven Anında Arama</title>
	<link rel="stylesheet" href="style.css"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(function(){
		
			$("#sonuclar").hide();
			
			// Tıklandığında işlem  yap
			$(".input").keyup(function(){
				
				// Veriyi alalım
				var value = $(this).val();
				var deger = "value="+value;
				
				$.ajax({
					
					type: "POST",
					url: "post.php",
					data: deger,
					success: function(cevap){
						if(cevap == "yok"){
							$("#sonuclar").show().html("");
							$("#sonuclar").html("Hiç bir sonuç bulunamadı!!");
						}else if(cevap == "bos"){
							$("#sonuclar").hide();
						}else {
							
							$("#sonuclar").show();
							$("#sonuclar").html(cevap);
							
						}
					}	
					
				})
				
			});
		
		});
	</script>
</head>
<body>
	
	<!-- Ortala -->
	<div id="ortala">
		
		<input type="text" name="eftal" class="input"/>
		<div id="sonuclar"><ul></ul></div>
	
	</div>
	<!--#Ortala -->
	
</body>
</html>