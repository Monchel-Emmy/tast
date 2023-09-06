
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <div class="header"><span> <img src="../logo.png" alt="" height="90%" style="margin:0.3rem;"></span><li>monchel</li> <li></li> <li>Logout</li> </div>
    <center>
        <div class="container"  style="margin-top: 4rem; background-color: rgb(15, 122, 136); width: 30rem;height: 30rem; border-radius: 10PX;">
        <div class="explain">
            <h2>Add new Course</h2> <a href="admin.html">back</a>
        </div>
        <form action="newcourse_process.php" method="post">
    <div class="course" style="height: 20rem; width: 70%;margin-top: 5rem;">
        course Title: <input type="text" name="c_title"><br>
        Description: <textarea name="c_description" id="" cols="30" rows="10"></textarea><br>
        Image: <input type="file" name="c_picturer" id=""><br>
      Category : <select name="c_category" id="">
        <option value="book">BOOK</option>
        <option value="Sylabus">SYLABUS</option>
        <option value="passed exam">PASSED EXAM</option>
    </select><br><br>
    <input type="submit" name="">
    </div></form></div>
</center>


</body>
</html>