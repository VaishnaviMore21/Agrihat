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
    $first_name = $_REQUEST['fname'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['pno'];
	$city=$_REQUEST['city'];

    $gender=$_REQUEST['gender'];
    $password=$_REQUEST['cp'];
	
              
        //to prevent from mysqli injection  
       // $username = stripcslashes($username);  
        //$password = stripcslashes($password);  
        //$username = mysqli_real_escape_string($con, $username);  
        //$password = mysqli_real_escape_string($con, $password);  
      
      $sql = "INSERT INTO buyeraccount VALUES ('$first_name','$email','$gender','$number','$city','$password')";
         
        $result = mysqli_query($con, $sql);  
       
        if( mysqli_query($con, $sql))
        {
            echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
             . " to view the updated data</h3>";

        }
        else{
            echo $con->error;
            echo "Data cannot be inserted";
        }
			 
?>  