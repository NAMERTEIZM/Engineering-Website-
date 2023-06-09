<?php
try{
$db = new PDO ("mysql:hostname=localhost;dbname=kariyermuh;charset=utf8", "root","0000");
} catch(PDOException $e){
 
echo $e->getMessage();
}


?>