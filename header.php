<?php

session_start();
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
?>

<div class="firstpart">
   <div class="top">
      <div class="logo"><img src="logo.png" alt=""> </div>  <div class="logo" ><a href="homepage.php" style="padding-left: 1rem;">HOME</a> |<a href="courses2.php" style="padding-left: 1rem;">COURSES</a>| <a href="question2.php"  style="padding-left: 1rem;">QUESTIONS</a></div>
   </div>
   <div class="logo" style="margin-top:1rem; background-color: rgb(15, 122, 136); height: 5rem;" >  <div class="menu-bar">
    <ul>
        <li class="actie"><a href="class.php">CLASS</a></li>
        
        <li><a href="#">Tutorials</a>
        <div class="submenu">
            <ul>
                <li><a href="tutorials.php">WEB DEVELOPMENT</a></li>
                <li><a href="tutorials.php">APP DEVELOPMENT</a></li>
                <li><a href="tutorials.php">ENGINEERING COURSES</a></li>
                <li><a href="tutorials.php">ECONOMIC COURSES</a></li>
                <li><a href="tutorials.php">ENTERPRENEURSHIP</a></li>
                <li><a href="tutorials.php">LEADERSHIP</a></li>
               
            </ul>
        </div>
        </li>
        <li><a href="#">Exercises</a>
            <div class="submenu">
                <ul>
                    <li><a href="exercises.php">MATH</a></li>
                    <li><a href="exercises.php">OS</a></li>
                    <li><a href="exercises.php">PHYSICS</a>
                        <li><a href="exercises.php">MATH</a></li>
                        <li><a href="exercises.php">OS</a></li>
                        <li><a href="exercises.php">PHYSICS</a>

                </ul></li>
        

        <li><a href="#">Documents</a>
            <div class="submenu">
                <ul>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="books.php">SYLABUS</a></li>
                    <li><a href="books.php">Passed Exams</a></li>
                    <li><a href="books.php"> others</a></li>
                </ul>
        </li>
    </ul><ul style="padding-left: 400px;"> <span style=" background-color: white; margin-bottom: 30px;  height: 2rem; width: 2rem; border-radius: 50%;"> <img src="study.jpg" alt=""  style="width: 2rem; height: 2rem; border-radius: 50%; ">    <li><a href="#"> <?php echo strtoupper($fname)  ; ?></a>
        <div class="submenu">
            <ul>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Your progress</a></li>
                <li><a href="#">settings</a></li>
                <li><a href="landingpage.php"> Logout</a></li>
            </ul>
    </li> </span></ul>
</div></div>


<style>

body{
    /* position: relative; */
}

.part1{
    background-color: rgb(237, 252, 250);
    height: 10rem;
    color: black;
    padding: 2rem;
    
    
}

.vid{
    display: grid;
    grid-template-columns: 35% 30% 32%;
    margin: 1px;
   height: 15rem;
   /* background-color: #067575; */
   gap: 1rem;
   height: 10rem;

}
.vid .vid1{ 
    color: rgb(5, 5, 5);
    background-color: rgb(255, 254, 254);
    padding: 5px 1rem;
    height: 15rem;
}
.vid .vid1 img{ 
  height: 10rem;
  width: 100%;
}

.menu-bar ul{
    display: inline-flex;
    list-style: none;
    
}
.menu-bar ul li{
    width: 90px;
    margin: 5px;
    padding: 5px;
}
.menu-bar ul li a{
    text-decoration: none;
    color: #fff;
}
.active, .menu-bar ul li:hover{
background: #14e2e9;
border-radius: 3px;
}
.submenu{
    display: none;
}
.menu-bar ul li:hover .submenu{
display: block;
position: absolute;
background: rgb(15, 26, 15);
/* width: 100%; */
border-radius: 10px;

margin-left: -70px;
}
.menu-bar ul li:hover .submenu ul{
    display: block;
    margin: 10px;
   

}
.menu-bar ul li:hover .submenu ul li{
    width: 150px;
    padding: 10px;
    background: transparent;
    
    border-radius: 0;
    text-align: left;
}
.menu-bar ul li:hover .submenu ul li:last-child{
    border-bottom: none;
}
.menu-bar ul li:hover .submenu ul li a:hover{
    color: #067575;
}
.subproduct{
    display: none;
}
.submenu ul li:hover .subproduct{
    display: block;
    position: absolute;
    background: rgb(0,100,0);
    
    margin-left: -15px;
    }
    .submenu ul li:hover .subproduct ul{
        display: block;
        margin: 10px;
    }
    
    .submenu ul li:hover .subproduct ul li:last-child{
        border-bottom: none;
    }
    .submenu ul li:hover .subproduct ul li a:hover{
        color: #2bab0d;
    }
.head{
    background-color: none;
    text-align: left;
}
.head ul{
    list-style: none;
    /*  */
    display: inline-flex;
}
.head ul li{
    margin-right: 40%; 

    
}
.head ul li a{
    text-decoration: none;
}



body {
    font-family: Arial, sans-serif;
    margin: 2rem;
    padding: 0;
    position: absolute;
}
</style>