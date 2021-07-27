<?php
//KONVERSI PHP KE PHP 7
require_once "parser-php-version.php";

<<<<<<< HEAD
$mysql_host = "localhost";
//$mysql_host = "localhost:50000";
=======
//$mysql_host = "localhost";
$mysql_host = "localhost";
>>>>>>> f63c07b601347e4f7e2797ca80defdba55f24817
$mysql_user = "root";
$mysql_pass = "";
//$mysql_pass = "GL-System123";
$mysql_dbname = "wedding-v1";

//Api key diganti lagi karena saldo habis
$my_apikey = "VXSW4FVOF6Z81PPZVAE8";


$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_dbname);
if(! $conn ) {
  die('Database tidak terhubung ' . mysql_error());
}
?>

