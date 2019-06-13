<?php

try{ 

   $db = new PDO("mysql:host=localhost;dbname=onurhizlan;charset=utf8","root",""); 

}catch(PDOException $ibo){

   echo $ibo->getMessage(); 

}



$Sayfa   = @intval($_GET['sayfa']); if(!$Sayfa) $Sayfa = 1;

$Say   = $db->query("select * from deneme order by ad DESC");

$ToplamVeri   = $Say->rowCount();

$Limit	= 8;

$Sayfa_Sayisi	= ceil($ToplamVeri/$Limit); if($Sayfa > $Sayfa_Sayisi){$Sayfa = 1;}

$Goster   = $Sayfa * $Limit - $Limit;

$GorunenSayfa   = 5;


$Makale	= $db->query("select * from deneme order by ad DESC limit $Goster,$Limit");

$MakaleAl = $Makale->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="Makale">

   <?php foreach($MakaleAl as $MakaleBas){?>

      <div class="Makale">

         <h1><?=$MakaleBas["ad"]?></h1>

         <span><?=$MakaleBas["soyad"]?></span>

      </div>

   <?php } ?>

</div>

<?php if($Sayfa > 1){?>

<span class="say_sabit"><a href="index.php?sayfa=1">İlk</a></span>

<div class="say_sabit"><a href="index.php?sayfa=<?=$Sayfa - 1?>">Önceki</a></div>

<?php } ?>

<?php

for($i = $Sayfa - $GorunenSayfa; $i < $Sayfa + $GorunenSayfa +1; $i++){

   if($i > 0 and $i <= $Sayfa_Sayisi){

      if($i == $Sayfa){

         echo '<span class="say_aktif">'.$i.'</span>';

      }else{

         echo '<a class="say_a" href="index.php?sayfa='.$i.'">'.$i.'</a>';

      }

   }

}

?>

<?php if($Sayfa != $Sayfa_Sayisi){?>

<div class="say_sabit"><a href="index.php?sayfa=<?=$Sayfa + 1?>">Sonraki</a></div>

<div class="say_sabit"><a href="index.php?sayfa=<?=$Sayfa_Sayisi?>">Son</a></div>

<?php } ?>	