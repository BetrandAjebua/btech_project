<?php 
$host = "localhost";
$dbname="bbms1";
$user= "root";
$pas="";

$db = New pdo("mysql:host=$host;dbname=$dbname", $user, $pas);
if($db){
    echo("connected");
}