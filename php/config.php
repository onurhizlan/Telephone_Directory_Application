<?php
$user = "root";
$pass = "";
try {
    $dbh = new PDO("mysql:host=localhost;dbname=onurhizlan;charset=utf8","root","");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 4;
$page  = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
$query = "SELECT * FROM deneme";

require_once 'paginator.class.php';
$paginator  = new Paginator($dbh, $query);
$results    = $paginator->getData($limit, $page);
?>