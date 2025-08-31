<?php
 $servername="localhost";
 $username="root";
 $password="";
 $db="dbvaish2";
 //create a connection
 
 $conn=mysqli_connect($servername,$username,$password,$db);
 
 //die if connection was not succesful
 if(!$conn)
 {
 
     die("sorry unable to connect".mysqli_connect_error());
 }
 else{
     echo"Connection was Successully";
 }


 $sql="SELECT * FROM trip2 WHERE 'dest'='Vellore'";
 $result=mysqli_query($conn,$sql);

 $num=mysqli_num_rows($result);
 echo $num;
 echo"<br>";
 if($num>0)
 {
    //fettch with while loop
       while($row=mysqli_fetch_assoc($result))
       {
         echo var_dump($row);
         echo"<br>";
       }
 }
















?>

