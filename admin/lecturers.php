<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>users</title>
</head>
<body>
    <div class="header"><span> <img src="../logo.png" alt="" height="90%" style="margin:0.3rem;"></span><li>monchel</li> <li></li> <li>Logout</li> </div>
    <center>
        <h2>LIST OF ALL LECTURERS</h2> <a href="admin.html">back</a>
        <table border="2" style=" border-collapse:collapse">
        <tr>  <th>ID</th>  <th>First_name</th>  <th>Last_name</th>  <th>Email</th> <th>Password</th> <th>Bio</th> <th>Expertise</th> <th>Action</th></tr>
        <?php
       
        $result = mysqli_query( $con,"SELECT * FROM lecturer");
       
        while( $row = mysqli_fetch_assoc($result)){      			

         echo  " <tr> <td>".$row['l_id']."</td> <td>".$row['l_firstname']."</td> <td>".$row['l_lastname']."</td> <td>".$row['l_email']."</td> <td>".$row['l_password']."</td> <td> </td> <td> </td><td><button type='submit'>Edit </button> | <button type='submit'>Delete</button></td></tr>";


        }
        
         mysqli_close($con) ;
          
       
 
       ?>
        </table>
        <a href="newuser.php">Add new User</a>
    </center>
</body>
</html>
