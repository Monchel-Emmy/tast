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
    <title>COURSES</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="homepage.css">
</head>
<body >


<?php
   include('header.php');
   ?>
        
      <div class="container">
         <div style="color: blue;">
      <!-- <center> <marquee>SAME NEW COURSES HERE!!! </marquee></center> </div> -->
         <h1 class="heading">Our Course</h1> 
         <div class="conttitle" style="color: rgb(8, 16, 24); background-color: antiquewhite; justify-content: center; padding: 1rem;">Below are categories for different courses. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem a eum aliquam. Quibusdam accusantium perferendis quia explicabo <br>repudiandae ducimus, suscipit modi laudantium est officiis dolores <br>natus eligendi accusamus adipisci reiciendis.<br>accusantium.</div>
         <div class="box-container">
           
           <div class="box">
              <img src="study1.webp" alt="">
              <h3>HTML 5</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, cum? Aspernatur adipisci magnam quod, itaque sit perspiciatis officia sunt. Incidunt delectus quidem, quisquam vel provident ducimus voluptatem fuga illum cupiditate.</p>
              <a href="studycourse.html" class="btn">Read more</a>
           </div>
       
           <div class="box" >
               <img src="study2.webp" alt="">
               <h3>CSS</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, cum? Aspernatur adipisci magnam quod, itaque sit perspiciatis officia sunt. Incidunt delectus quidem, quisquam vel provident ducimus voluptatem fuga illum cupiditate.</p>
               <a href="studycourse.html" class="btn">Read more</a>
            </div>
       
            <div class="box">
               <img src="study3.jpg" alt="">
               <h3>JS</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, cum? Aspernatur adipisci magnam quod, itaque sit perspiciatis officia sunt. Incidunt delectus quidem, quisquam vel provident ducimus voluptatem fuga illum cupiditate.</p>
               <a href="studycourse.html" class="btn">Read more</a>
            </div>
       
            <div class="box">
               <img src="study4.jpg" alt="" width="">
               <h3>OTHER</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, cum? Aspernatur adipisci magnam quod, itaque sit perspiciatis officia sunt. Incidunt delectus quidem, quisquam vel provident ducimus voluptatem fuga illum cupiditate.</p>
               <a href="studycourse.html" class="btn">Read more</a>
            </div>
       
            <div class="box">
               <img src="study3.jpg" alt="">
               <h3>NICE</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, cum? Aspernatur adipisci magnam quod, itaque sit perspiciatis officia sunt. Incidunt delectus quidem, quisquam vel provident ducimus voluptatem fuga illum cupiditate.</p>
               <a href="studycourse.html" class="btn">Read more</a>
            </div>
         </div>
       
           </div>


       </div>
   
       <center> <div class="other"> Help Center:</div>
  
       <?php
   include('footer.php');
   ?>
           </center>
</body>
</html>