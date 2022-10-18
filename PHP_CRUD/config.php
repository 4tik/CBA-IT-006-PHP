<?php
$serverName="localhost";
$userName ="root";
$password="";
$databaseName ="crud_db";

$connection = new mysqli($serverName, $userName, $password, $databaseName);
if($connection->connect_error)
{
    die("Connection Faild : ".$connection->connect_error);
}
?>