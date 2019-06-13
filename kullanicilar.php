<?PHP 
INCLUDE_ONCE('config.php');
  $ID = $_GET['id'];
  $query = $BAGLAN->query("SELECT * FROM kullanicilar WHERE ID = $ID")->FETCH(PDO::FETCH_ASSOC);
    ECHO $query['kull_info'];
?>