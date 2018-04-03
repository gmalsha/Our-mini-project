<?php 
//$connection = mysqli_connect(dbserver,dbuser,dbpass,dbname);
$dbhost ='localhost';
$dbuser ='root';
$dbpass = '';
$dbname ='smartdb';



$connection = mysqli_connect('localhost','root','','smartdb');


if (mysqli_connect_errno()) {

       die("database connection failed".mysqli_connect_error()); }



 ?> 