<?php
$host = "localhost";
$user = "";
$pwd = "";
$dbname = "";

$mysqli = mysqli_connect("$host", "$user", "$pwd", "$dbname");
if(!$mysqli) {
   die('Tidak bisa mengaktifkan database: '. $dbname);
}
?>