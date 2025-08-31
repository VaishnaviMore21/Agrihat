
<?php
session_start();
$servername="localhost";
$uname="root";
$password="";
$db_name="crop";
$conn=mysqli_connect($servername,$uname,$password,$db_name);
if(!$conn){
    echo"Connection failed";
}
else{
    echo"Connected to database";
}




$ID=$_POST['ID'];
$crop_name = $_POST["cropname"];

$sql = "INSERT INTO addcrops VALUES ('ID','$crop_name')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		?>