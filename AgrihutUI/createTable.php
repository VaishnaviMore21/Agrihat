<?php
$servername="localhost";
$username="root";
$password="";
$db="dbvaish2";
//create a connection

$conn=mysqli_connect($servername,$username,$password,$db);
echo"Connection was Successully";


//die if connection was not succesful
if(!$conn)
{
    die("sorry unable to connect".mysqli_connect_error());
}

//create table

$sql="CREATE TABLE `dbvaish2`.`trip2` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
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
?>