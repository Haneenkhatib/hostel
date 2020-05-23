<?php
/*$dbuser="mysqldbuser@hostelsite-mysqldbserver";
$dbpass="Huda220151256";
$host="hostelsite-mysqldbserver.mysql.database.azure.com";
$db="myhosteldb";
*/
//$mysqli =new mysqli("localhost","root", "", "hostel");

$dbName = 'hostel';
$dbUser = 'root';
$dbPass = 'root';
$mysqli = new mysqli('127.0.0.1', $dbUser, $dbPass, $dbName, 3306);
?>

