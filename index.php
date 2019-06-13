<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="new1.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <meta charset="UTF-8">
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
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8">
                           <div id="ara">
                              First Name:<br>
                              <input type="text" name="ad" id="ad" class="form-control"><br>
                              <div id="sonuc">  
                              </div>
                           </div>
                           <div id="ara">
                              Last Name:<br>
                              <input type="text" name="soyad" id="soyad" class="form-control">	<br>
                              <div id="sonuc1">  
                              </div>
                           </div>
                           <div id="ara"> 	 
                              Adress:<br>
                              <input type="text" name="adres" id="adres" class="form-control"><br>
                           </div>
                           <div id="ara"> 
                              Phone Number:<br>
                              <input type="text" name="telefon" id="telefon" title="Bu input'a telefon numaranınızı giriniz.Örn:5079513634" required class="form-control">	<br>
                           </div>
                           <div id="ara">  
                              E-mail:<br>
                              <input type="text" name="email" id="email" class="form-control"><br>   
                           </div>
                           <a href="index.php" class="dsp-inblk mr-20">
                           <img class="return-img" title="Geri dönmek için tıklayın" src="images/return.png" >
                           </a>
                           <input class="mr-20 mt-10"    type="image" name="sil" value="submit" title="Silmek için tıklayın" src="images/delete.png">
                           <input class="mt-10 mr-20" type="image"  value="submit" name="ekle" title="Eklemek için tıklayın" src="images/kaydet.png">
                           <input class="mt-10" type="image"  value="submit" name="guncelle" title="Güncellemek için tıklayın" src="images/guncelle.png">
                        </div>
                        <div class="col-md-4">
                           <div id="result"></div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
         </form>
      </section>
      <section class="section-2">
         <div id="2" class="tabcontent">
            <br>
            <div class="href"><br>
               <a href="refresh:2;url=listele.php">Sayfayı Yenilemek İçin Tıklayın</a>
            </div>
            <br>
            <table border="1" align="center" width="500">
               <tr>
                  <td>ad</td>
                  <td>soyad</td>
                  <td>adres</td>
                  <td>telefon</td>
                  <td>email</td>
                  <td>Sil</td>
               </tr>
               <?php
                  $baglan=mysqli_connect("localhost","root","","onurhizlan");
                  mysqli_set_charset($baglan, "utf8");
                  $sonuc=mysqli_query($baglan,"select * from deneme"); 
                   
                  while($satir=mysqli_fetch_array($sonuc))
                  {
                  echo '<tr>';
                  echo '<td>'.$satir['ad'].'</td>';
                  echo '<td>'.$satir['soyad'].'</td>';
                  echo '<td>'.$satir['adres'].'</td>';
                  echo '<td>'.$satir['telefon'].'</td>';
                  echo '<td>'.$satir['email'].'</td>';
                  echo '<td> <a href="sil.php?id='.$satir['telefon'].'" onclick="return uyari();">Sil</a> </td>';
                  echo '</tr>';
                  }
                  ?>
            </table>
            <br>	
            <a href="index.php">
            <img src="images/return.png"  style="width:42px;height:42px;border:0;">
            </a>
         </div>
      </section>
      <section class="section-3">
         <div id="3" class="tabcontent">
            <br>
            <div class="href"><br>
               <a href="refresh:2;url=listele.php">Sayfayı Yenilemek İçin Tıklayın</a>
            </div>
            <br>
            <table border="1" align="center" width="500">
               <tr>
                  <td>ad</td>
                  <td>soyad</td>
                  <td>adres</td>
                  <td>telefon</td>
                  <td>email</td>
               </tr>
               <?php
                  $baglan=mysqli_connect("localhost","root","","onurhizlan");
                  mysqli_set_charset($baglan, "utf8");
                  $sonuc=mysqli_query($baglan,"select * from deneme"); 
                   
                  while($satir=mysqli_fetch_array($sonuc))
                  {
                  echo '<tr>';
                  echo '<td>'.$satir['ad'].'</td>';
                  echo '<td>'.$satir['soyad'].'</td>';
                  echo '<td>'.$satir['adres'].'</td>';
                  echo '<td>'.$satir['telefon'].'</td>';
                  echo '<td>'.$satir['email'].'</td>';
                  
                  echo '</tr>';
                  }
                  ?>
            </table>
            <br>	
            <a href="index.php">
            <img src="images/return.png"  style="width:42px;height:42px;border:0;">
            </a>
         </div>
      </section>
      <section class="section-4">
         <div id="4" class="tabcontent">
            <br>
            <div class="href"><br>
               <a href="refresh:2;url=listele.php">Sayfayı Yenilemek İçin Tıklayın</a>
            </div>
            <br>
            <table border="1" align="center" width="500">
               <tr>
                  <td>ad</td>
                  <td>soyad</td>
                  <td>adres</td>
                  <td>telefon</td>
                  <td>email</td>
                  <td>Güncelle</td>
               </tr>
               <?php
                  $baglan=mysqli_connect("localhost","root","","onurhizlan");
                  mysqli_set_charset($baglan, "utf8");
                  $sonuc=mysqli_query($baglan,"select * from deneme"); 
                   
                  while($satir=mysqli_fetch_array($sonuc))
                  {
                  echo '<tr>';
                  echo '<td>'.$satir['ad'].'</td>';
                  echo '<td>'.$satir['soyad'].'</td>';
                  echo '<td>'.$satir['adres'].'</td>';
                  echo '<td>'.$satir['telefon'].'</td>';
                  echo '<td>'.$satir['email'].'</td>';
                  echo '<td> <a href="kaydetguncelle.php?id='.$satir['telefon'].'">Guncelle</a> </td>';
                  
                  echo '</tr>';
                  }
                  
                  ?>
            </table>
            <br>	
            <a href="index.php">
            <img src="images/return.png"  style="width:42px;height:42px;border:0;">
            </a>
         </div>
      </section>
   </body>
   <footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js" type="text/javascript"></script>	
      <script src="jquery.1.7.2.min.js"</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
      <script>
         $(document).ready(function($){
         	$('#telefon').mask("9999999999", {placeholder:"XXXXXXXXXX"});
         });
         
      </script>
      <link rel="stylesheet" href="style.css" />
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script type="text/javascript">  
         $(function(){
              	  
         $("#sonuc").hide();
         
         $("input[name=ad]").keyup(function(){
          
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
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script type="text/javascript">  
         $(function(){
              	  
         $("#sonuc1").hide();
         
         $("input[name=soyad]").keyup(function(){
          
          var value  = $(this).val(); 
          var konu   = "value="+value;
          
          $.ajax({
           
           type: "post",
                    url:   "ajax2.php",
                    data: konu, 
           beforeSend: function(){
            
           $("#sonuc1").fadeIn().html('<img src="http://i.hizliresim.com/Eg605Z.gif" width="20" height="20" />'); 
            
           },
           
                    success: function(sonuc1){
            
           $("#sonuc1").show().html(sonuc1); 
            
           }			   
           
           
          });
          
          
          
         });
         
         
         
         
         });
         
         
      </script>	
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script type="text/javascript">  
         $(function(){
              	  
         $("#sonuc2").hide();
         
         $("input[name=adres]").keyup(function(){
          
          var value  = $(this).val(); 
          var konu   = "value="+value;
          
          $.ajax({
           
           type: "post",
                    url:   "ajax3.php",
                    data: konu, 
           beforeSend: function(){
            
           $("#sonuc2").fadeIn().html('<img src="http://i.hizliresim.com/Eg605Z.gif" width="20" height="20" />'); 
            
           },
           
                    success: function(sonuc2){
            
           $("#sonuc2").show().html(sonuc2); 
            
           }			   
           
           
          });
          
          
          
         });
         
         
         
         
         });
         
         
      </script>	
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script type="text/javascript">  
         $(function(){
              	  
         $("#sonuc3").hide();
         
         $("input[name=telefon]").keyup(function(){
          
          var value  = $(this).val(); 
          var konu   = "value="+value;
          
          $.ajax({
           
           type: "post",
                    url:   "ajax4.php",
                    data: konu, 
           beforeSend: function(){
            
           $("#sonuc3").fadeIn().html('<img src="http://i.hizliresim.com/Eg605Z.gif" width="20" height="20" />'); 
            
           },
           
                    success: function(sonuc3){
            
           $("#sonuc3").show().html(sonuc3); 
            
           }			   
           
           
          });
          
          
          
         });
         
         
         
         
         });
         
         
      </script>	
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script type="text/javascript">  
         $(function(){
              	  
         $("#sonuc4").hide();
         
         $("input[name=email]").keyup(function(){
          
          var value  = $(this).val(); 
          var konu   = "value="+value;
          
          $.ajax({
           
           type: "post",
                    url:   "ajax5.php",
                    data: konu, 
           beforeSend: function(){
            
           $("#sonuc4").fadeIn().html('<img src="http://i.hizliresim.com/Eg605Z.gif" width="20" height="20" />'); 
            
           },
           
                    success: function(sonuc4){
            
           $("#sonuc4").show().html(sonuc4); 
            
           }			   
           
           
          });
          
          
          
         });
         
         
         
         
         });
         
         
      </script>	
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
      <script>
         function getUserInformation(dnm)
         {
         	var value  = "asdas"; 
         	var konu   = "value=" + value;
         	var ad = document.getElementById("ad").value;	
         
         	var url1 = "ajax3.php?name=" + encodeURIComponent(dnm);
         	
         	$.ajax({
            
            type: "post",
                     url:   url1,
                     data: konu, 		   
                     success: function(sonuc){
         	
         	var array = sonuc.split("*");
         	
         	document.getElementById("ad").value=array[2];	
            document.getElementById("soyad").value=array[0];		   
         	document.getElementById("adres").value=array[1];   
         	document.getElementById("telefon").value=dnm;
         	document.getElementById("email").value=array[3]; 				
            }			   
            		   
         	});
         		
         }
      </script>
      <script>
         function getUserInformation2(dnmm)
         {
         	var value  = "asdas"; 
         	var konu   = "value=" + value;
         	var ad = document.getElementById("soyad").value;	
         
         	var url1 = "ajax6.php?name=" + encodeURIComponent(dnmm);
         	
         	$.ajax({
            
            type: "post",
                     url:   url1,
                     data: konu, 		   
                     success: function(sonuc){
         	
         	var array = sonuc.split("*");
         	
         		
         	document.getElementById("ad").value=array[0];	
         	document.getElementById("soyad").value=array[2];		   
         	document.getElementById("adres").value=array[1];   
         	document.getElementById("telefon").value=dnmm;
         	document.getElementById("email").value=array[3]; 			
            }			   
            		   
         	});
         		
         }
      </script>
      <script>
         $(document).ready(function(){
         
          load_data();
         
          function load_data(query)
          {
           $.ajax({
            url:"fetch.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
             $('#result').html(data);
            }
           });
          }
          $('#ad').keyup(function(){	
           var search = $(this).val();
           if(search != '')
           {
            load_data(search);
           }
           else
           {
            load_data();
           }
          });
         });
      </script>
      <script>
         $(document).ready(function(){
         
          load_data();
         
          function load_data(query)
          {
           $.ajax({
            url:"fetch2.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
             $('#result').html(data);
            }
           });
          }
          $('#soyad').keyup(function(){	
           var search = $(this).val();
           if(search != '')
           {
            load_data(search);
           }
           else
           {
            load_data();
           }
          });
         });
      </script>
   </footer>
</html>