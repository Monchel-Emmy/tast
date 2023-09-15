<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <title>Document</title>
</head>
<body>
    <div class="firstpart">
   <div class="top">
      <div class="logo"><img src="logo.png" alt=""> </div>  <div class="logo"><a href="landingpage.php">HOME</a><a href="courses.php">COURSES</a><a href="question.php">QUESTIONS</a> <a href="contact.php">CONTACT</a></div>
   </div>

<center>   <div id="welcomeMessage"><?php
   if (isset($_SESSION['error'])) {
           echo('<p style="color:red">'.$_SESSION['error']."</p>");
    }
    ?></div> <div class="container"  style="margin-top: 5rem; background-color: rgb(15, 122, 136); width: 30rem;height: 20rem;border-radius: 10PX; ">
    <div class="grid1"  >
 

       <p><h3>Welcome to Login Page.</h3></p> 
    
    <form action="login_process.php" method="POST">

    <div class="grid2">
        Email:<br>
        <input type="text" name="email" id=""><br>
        Password:<br>
        <input type="text" name="pname" id=""><br>

        <select name="category" id="">
            <option value="student" >Student</option>
            <option value="lecturer">Lecturer</option>
            <option value="others">Others</option>
           </select><br>
           
       <p>If you don't have any account you can now<a href="register.php"> REGISTER</a>here.</p><br>
       
        <div class="sub"  style="background-color: rgb(119, 117, 115); width: 15rem; "><button type="submit" style="background-color: rgb(119, 117, 115);  ">Login</button></div></p>
    </div></form><p> <a href="forgetpassword.html">Forget you Password?</a> </p>
   </div></center> 
</div>
<center> <div class="other"> Help Center:</div><hr>
    <div class="thirdpart">
        <div class="part0"><h3>EDUCATIONAL TOOLS</h3></div>
        <div class="part0"> <h3>SUPPORT</h3> </div>
        <div class="part0"> <h3>CONNECT</h3></div>
        <div class="part0"> <h3>About</h3></div>
        <div class="part0"> <h3>Address</h3></div>
        <div class="part0">
            <span>Learning Library</span><br>
            <span>Guided Lessons</span><br>
            <span></span><br>
         </div>
        <div class="part0"> 
            <span>Help Center</span><br>
            <span>Give Gift</span><br>
            <span>Contact Us</span><br>
            <span>FeedBack</span><br></div>
        <div class="part0">

            <span>Our Blog</span><br>
            <span>Tell us what you think</span><br>
            <span>Youtube</span><br>
            <span>Whatsapp</span><br>
            <span>Tweeter</span><br>
            <span>LinkedIn</span><br>
        </div>
        <div class="part0">
            <span>Company</span><br>
            <span>Privacy Policy</span><br>
            <span>Terms and Service</span><br>
        </div>
        <div class="part0">
            <span>Rwanda , Kigali city</span><br>
            <span>phoneNumber:+25782419365</span><br>
            <span>Email: LearnAll@gmail.com</span><br>
        </div>
        <div class="partcopy"> CopyRight &copy2023 , Developed By PROGRAMMER <b>MONCHEL</b></div>
    </div>
       </center>

       <script>
        const welcomeMessage = document.getElementById("welcomeMessage");
        setTimeout(() => {
                welcomeMessage.style.display = "none";
            }, 2000);
      </script>
</body>
</html>




