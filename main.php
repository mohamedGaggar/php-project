<?php


$host="localhost";
$dataName="resturant";
$dataType="mysql";
$user="root";
$password="";

$connection= new PDO("$dataType:host=$host;dbname=$dataName",$user,$password);
$query="select * from userz";

$querySql=$connection->prepare($query);
$querySql->execute();
$fetchedData=$querySql->fetchAll(PDO::FETCH_ASSOC);
?>