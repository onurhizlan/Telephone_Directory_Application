<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="new1.css">
	  
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta charset="UTF-8">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js" type="text/javascript"></script>	
		<script src="jquery.1.7.2.min.js"</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
	<script>

	$(document).ready(function($){
		$('#telefon').mask("+99 999 999 99 99", {placeholder:"+XX XXX XXX XX XX"});
	});
	
	</script>
	<link rel="stylesheet" href="style.css" />
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">  
  
    $(function(){
         	  
	   $("#sonuc").hide();
	   
	   $("input[name=soyad]").keyup(function(){
		   
		   var value  = $(this).val(); 
		   var konu   = "value="+value;
		   
		   $.ajax({
			   
			   type: "post",
               url:   "ajax2.php",
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
      <div class="center">
         <div class="tab ">
            <button class="tablinks" onclick="openFile(event, '1')">Ekle</button>
            <button class="tablinks" onclick="openFile(event, '2')">Sil</button>
            <button class="tablinks" onclick="openFile(event, '3')">Görüntüle</button>
            <button class="tablinks" onclick="openFile(event, '4')">Güncelle</button> 

         </div>
      </div>
	  <section class="section-1">
      <div id="1" class="tabcontent">
         <br>
         <form class="form" name="kaydet" action="kaydet.php"   method="POST">
		 
		 <div id="genel">  
		
            First Name:<br>
            <input type="text" name="ad"><br>
			
			 
			 <div id="ara"> 
            Last Name:<br>
            <input type="text" name="soyad">	<br>
			<div id="sonuc">  
			 </div></div>
			<span>sonuc</span>
			
            Adress:<br>
            <input type="text" name="adres"><br>
            Phone Number:<br>
             <form>
			<input type="text"  name="telefon" id="telefon">
			</form>
            E-mail:<br>
            <input type="text" name="email"><br><br>   
			
			<a href="index.php" class="dsp-inblk mr-20">
  <img class="return-img" src="images/return.png" >
  
</a>
			<input class="mr-20 mt-10"    type="image" name="sil" value="submit" src="images/delete.png">
			<input class="mt-10" type="image"  value="submit" name="ekle" src="images/kaydet.png">
			</form>
         </form>
		 	 
	
      </div>
	  </section>
	   <script>
	  
	 

         function openFile(evt, cityName) {
             var i, tabcontent, tablinks;
             tabcontent = document.getElementsByClassName("tabcontent");
             for (i = 0; i < tabcontent.length; i++) {
                 tabcontent[i].style.display = "none";
             }
             tablinks = document.getElementsByClassName("tablinks");
             for (i = 0; i < tablinks.length; i++) {
                 tablinks[i].className = tablinks[i].className.replace(" active", "");
             }
             document.getElementById(cityName).style.display = "block";
             evt.currentTarget.className += " active";
         }
         
         function uyari() {
          
         if (confirm("Bu kaydı silmek istediğinize emin misiniz?"))
            return true;
         else 
            return false;
         }
		 
      </script>
	  </body>
</html>