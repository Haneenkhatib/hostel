<?php
$DB_host = "hostelsite-mysqldbserver.mysql.database.azure.com";
$DB_user = "mysqldbuser@hostelsite-mysqldbserver";
$DB_pass = "Huda220151256";
$DB_name = "myhosteldb";

try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>

