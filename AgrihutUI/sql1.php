<?php
 echo"MY DATABASE CONNECTIVITY<br>";


 $servername="localhost";
$username="root";
$password="";

//create a connection

$conn=mysqli_connect($servername,$username,$password);
echo"Connection was Successully";

//create a database
$sql="CREATE DATABASE dbvaish";
$result=mysqli_query($conn,$sql);
echo "Result is:".var_dump($result);
echo"<br>";

//check for the database creation sucess

if($result)
{
    echo"db was creted fine";
}
else{
    echo"DB was not creted ";
}

//die if connection was not succesful
if(!$conn)
{
    die("sorry unable to connect".mysqli_connect_error());
}




 ?>