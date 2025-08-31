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
    $sql="SELECT * FROM account";
    $result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Farmer Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
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
        <h1>GeeksForGeeks</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Farmer's Name</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Bank Account</th>
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
                <td><?php echo $rows['number'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['bankaccount'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html> 