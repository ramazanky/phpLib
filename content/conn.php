<?php 

$host = "localhost";
$vt_adi = "lib_base";
$kullanici_adi = "root";
$sifre = "";
try {
 @$db = new PDO("mysql:host={$host};dbname={$vt_adi}", $kullanici_adi, $sifre,
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(PDOException $exception){
 echo "Bağlantı hatası: " . $exception->getMessage();
}
error_reporting(E_ERROR);
ini_set('display_errors', '0');

$conn = mysqli_connect($host, $kullanici_adi, $sifre, $vt_adi);
$conn->query("SET CHARACTER SET utf8");

if (!$conn) {
 echo "Bağlantı hatası!";
}

$con=mysqli_connect($host, $kullanici_adi, $sifre, $vt_adi) or die(mysqli_error($con));
$con->query("SET CHARACTER SET utf8");

/*
▬▬▬▬▬▬▬▬▬▬▬▬
¦ Fuctions ¦
▬▬▬▬▬▬▬▬▬▬▬▬
*/


function deletesql($table, $where, $whereField) {
 $deletesqldb = $db->query("DELETE FROM $table WHERE $where='$whereField'")->fetch(PDO::FETCH_ASSOC);
}

function selectsql($qname, $table, $where, $whereField) {
 $qname = $db->query("SELECT * FROM $table WHERE $where='$whereField'")->fetch(PDO::FETCH_ASSOC);
}




function showError(){ ini_set('display_errors', 1); error_reporting(E_ALL);}



$targetFolder = "uploads";
$Max_File_Size = 10 * 1024 * 1024; // 10 MB



/*
▬▬▬▬▬▬▬▬▬▬▬▬
¦ Fuctions ¦
▬▬▬▬▬▬▬▬▬▬▬▬
*/


?>