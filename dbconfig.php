<?php


$username="root";
$password="";
$db="gaming_site";
$server="localhost";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    
    
   die("error");
}