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
     
   <div class="part1">
<div id="welcomeMessage">
    <?php
   if (isset($_SESSION['success'])) {
           echo('<p style="color:green">'.$_SESSION['success']." ". strtoupper($lname)."</p>");
    }
    ?>
</div>
  <h2 id="">Welcome  <?php echo strtoupper($lname)  ;?></h2>
  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
     Consequatur accusantium recusandae consequuntur nihil facere, eligendi nisi. 
     Ipsam modi suscipit dignissimos laudantium eos,
     autem enim error deserunt sunt, fugit tempore dolores.</P>
  
   <div class="vid">
    <div class="vid1"> <img src="study.jpg" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi v<br><button> <a href="watchingpage.html">Start Watching</a>  </button></div>
    <div class="vid1"><img src="study.jpg" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi v <br><button><a href="watchingpage.html">Start Watching</a></button> </div>
    <div class="vid1"> <img src="study.jpg" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi v <br><button><a href="watchingpage.html">Start Watching</a></button></div>
</div>
     
 </div>
    </div>
    
    <div class="other"> <center>New Courses:</center></div>
  
    <div class="secondpart">
        <div class="grid2"> <img src="study.jpg" alt="">1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi v<br><button>Take Course</button></div>
        <div class="grid2"><img src="study.jpg" alt=""> 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi v<br><button>Take Course</button> </div>
        <div class="grid3"> <img src="study.jpg" alt="">3Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi v <br><button>Take Course</button></div>
    </div>

    <div class="secondpart">
        <div class="grid2"> <img src="study.jpg" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi veniam?<br><button>Take Course</button></div>
        <div class="grid2"><img src="study.jpg" alt="">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi v <br><button>Take Course</button></div>
        <div class="grid3"> <img src="study.jpg" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eiuque quos animi v <br><button>Take Course</button></div>
    </div>

   <center> <div class="other"> Help Center:</div><hr>
   <?php
   include('footer.php');
   ?>
       </center>




       <script>
        const welcomeMessage = document.getElementById("welcomeMessage");
        setTimeout(() => {
                welcomeMessage.style.display = "none";
            }, 2000);
      </script>
</body>
</html>