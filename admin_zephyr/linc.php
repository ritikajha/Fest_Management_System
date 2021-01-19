<?php
@session_start();
$host="localhost";
$user="myuser";
$pw="mypassword";
$schema="zephyr";
$mysqli=mysqli_connect($host,$user,$pw,$schema);//returns database handle - representation of connectn. of php to database

//CONNECT TO MySQL
if(!$mysqli){
    echo "connection failed<br>";
    echo "ERROR NUMBER:".mysqli_connect_errno(). "<br>";
    echo "ERROR MESSAGE:".mysqli_connect_error(). "<br>";
    die();
}


//open Products database
// if(!mysqli_select_db($database ,$schema ) )
// {
//     die("Could not open dk_testn_mysql database</body></html> ") ;
// }

//echo "connected successfully<br>";
?>