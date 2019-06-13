<!DOCTYPE html>
<html>
   <head>
   <meta charset="UTF-8">
	  
	  <style type="text/css">
	  input{ padding:10px; border-radius:4px; font-size:25px;}
		</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js" type="text/javascript"></script>	
	<script src="jquery.1.7.2.min.js"</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
	<script>

	$(document).ready(function($){
		$('#telefon').mask("+99 999 999 99 99", {placeholder:"+XX XXX XXX XX XX"});
	});
	
</script>

</head>

<body>
<form>
 <input type="text"  name="telefon" id="telefon">
</form>
</body>
</html>










