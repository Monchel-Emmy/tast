<?php
session_start();
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="homepage.css">
    <title>Document</title>
</head>
<body>
<?php
   include('header.php');
   ?>
    
    <div class="ex"><P><center>Importants questions and their answers</center></P></div>
    <!-- <div class="other" style="color: black;"> <center>All courses You Want are here! :</center></div> -->
  <div class="cont" style="background-color: rgb(6, 110, 93); padding: 3rem; display: flex; justify-content: space-around;">
  <span style="">MATHEMATICS Questions</span><br><span>COMPUTER SCIENCE</span><br>  <span>MATHEMATICS Questions</span><br><span>MATHEMATICS Questions</span><br><span>MATHEMATICS Questions</span><br>
   </div>

   <div class="cont" style="background-color: rgb(6, 110, 93); padding: 3rem; display: flex; justify-content: space-around;">
      <span style="">MATHEMATICS Questions</span><br><span>COMPUTER SCIENCE</span><br>  <span>MATHEMATICS Questions</span><br><span>MATHEMATICS Questions</span><br><span>MATHEMATICS Questions</span><br>
       </div>

       
 
 

</div>
<center> <div class="other"> Help Center:</div><hr>
<?php
   include('footer.php');
   ?>
       </center>
</body>
</html>


