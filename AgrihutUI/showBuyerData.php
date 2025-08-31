<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db='farming';
    
      
    $con = mysqli_connect($host, $user, $password,$db);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    else{
       // echo"Connected to database";
    }
    $sql="SELECT * FROM buyeraccount";
    $result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>AgricultureHelpingSite Farmer Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body
        {
    
            background-repeat:no-repeat;
            background-size:cover;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: yellowgreen;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: ;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>AgricultureHelpingSite</h1>
        <!-- TABLE CONSTRUCTION -->
        <h1>Buyer Details</h1>
        <table>
            <tr>
                <th>Buyer's Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Number</th>
                <th>City</th>
                <th>Password</th>
               
            </tr>
            <?php
                     while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
               <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['no'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['password'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html> 