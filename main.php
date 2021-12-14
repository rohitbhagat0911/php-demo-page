<!DOCTYPE html>
<html class="background">
<head> <title>PHP Project </title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>



<?php


echo "<div class ='broder-div' >";
echo "<h1>My First Web Page</h1>";
echo '<form  method="POST" >';
echo '<h3 class="in-text">Please enter your name:</h3>';
echo '<input type="text" name="fname">';
echo '<div class = "button-design"><input type="submit" value="Submit" name="submit"></div>';
echo "</form>";


if (isset($_POST['submit']) && is_numeric($_POST['fname']) == false) {
      
        $firstName = $_POST['fname']; 
        echo "<h1> Hello, $firstName </h1>";
} 

else if(  isset($_POST['submit'])  )
  echo "<h2>Please don't enter special character or numbers<br> Enter your name only!</h2>";


echo "</div>";


?>


</body>
</html>

