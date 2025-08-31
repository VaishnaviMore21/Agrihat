<?php      
$host = "localhost";  
$user = "root";  
$password = '';  
$db='farmer';

  
$con = mysqli_connect($host, $user, $password,$db);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
else{
    echo"Connected to database";
}
    $first_name = $_REQUEST['firstname'];
		$email = $_REQUEST['email'];
		$cardno = $_REQUEST['cardnumber'];
		$state= $_REQUEST['state'];
	$address= $_REQUEST['address']; 
     $city=$_REQUEST['city'];
     $zip=$_REQUEST['zip'];
      $cvv=$_REQUEST['cvv'];
      $sql = "INSERT INTO dataordering VALUES ('$first_name','$email','$address','$city','$state','$cardno','$cvv')";
         
      $result = mysqli_query($con, $sql);  
     
       
        if( mysqli_query($con, $sql))
        {
            echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
             . " to view the updated data</h3>";

        }
        else{
            echo $con->error;
        }

     
?>  