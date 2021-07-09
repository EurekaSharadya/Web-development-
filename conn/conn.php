<?php
$host="localhost";
$dbname="user";
$username="root";
$password="";
try
{
$con=new PDO("mysql:host={$host};dbname={$dbname}",$username,$password);
}
//PDO-php database object
catch(PDOException $e)
{
echo "Error:".$e->getMessage();
}
?>