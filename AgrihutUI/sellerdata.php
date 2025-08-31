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
        //echo"Connected to database";
    }
    $sql="SELECT * FROM selleraccounts";
    $result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Seller Details</title>
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
          
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
           
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        th,td{
            border-color: yellowgreen;
        }
       tr:nth-child(even)
       {
        background-color:aliceblue;
       }
    
    </style>
</head>
 
<body>
    <section>
        <h1>AgricultureHelpingSite</h1>
        <!-- TABLE CONSTRUCTION -->
        <h1>Farmer Details</h1>
        <table>
            <tr>
                <th>Farmer's Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>City</th>
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['passw'];?></td>
                
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html> 