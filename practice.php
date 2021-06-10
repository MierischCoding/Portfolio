<!DOCTYPE html>
<html lang="en">
<head>

    <!--BootStrap Links Here-->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Google Fonts Links Here-->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link
href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap"
rel="stylesheet">

<!--External StyleSheets Links Here-->

<link rel="stylesheet" href="http://www.jonathanmierisch.slccwebdev.com/CSS/about.css"
type="text/css">

 <title>PHP Practice Page</title>

</head>
<body>

 <div id="page-container" class="text-secondary">
 <div id="content-wrap">

<header>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="http://www.jonathanmierisch.slccwebdev.com/PHP/home.php" class="navbar-brand">Home</a>
        <img src="http://www.jonathanmierisch.slccwebdev.com/pictures/aboutme.jpg" alt="Logo" height="25" id="aboutimg">
        <ul class="navbar-nav">
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navContent"
            aria-controls="navContent"
            area-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navContent">
            <li class="navbar-item"><a href="http://www.jonathanmierisch.slccwebdev.com/PHP/about.php" title="AboutMe"class="nav-link">About Me</a></li>
            <li class="navbar-item"><a href="http://www.jonathanmierisch.slccwebdev.com/PHP/contact.php" title="ContactMe"class="nav-link">Contact Me</a></li>
            <li class="navbar-item"><a href="http://www.jonathanmierisch.slccwebdev.com/PHP/practice.php" title="PHP"class="nav-link">PHP Practice Page</a></li>
          </div>
        </ul>
    </nav>

</header>
<body>

<?php

#Task 1 Assignment 1:
echo "Hello World!";

#Task 2 Assignment 1:
$greeting = "Hello World!";
echo "<br> <br>";
echo $greeting;
echo "<br> <br>";

#Task 3 Assignment 1:
$varOne = 1;
$varTwo = 2;
$totalSum = $varOne + $varTwo;
echo $totalSum;
echo "<br> <br>";

#Task 4 Assignment 1:
$varThree = 5;
$varFour = 6;
$totalSum2 = $varThree * $varFour;
echo $totalSum2;
echo "<br> <br>";

#Task 5 Assignment 1:
$varFive = 15;
$varSix = 30;
$totalSum3 = $varFive % $varSix;
echo $totalSum3;
echo "<br> <br>";
echo "<hr>";
echo "<br>";
?>

<?php

#Task 1 Assignment 2:
$mySkills = array("HTML", "CSS", "JavaScript", "PHP/MySQL", "WordPress");

echo 'My skills include: ' . $mySkills[0] . ", " . $mySkills[1] . ", " . $mySkills[2] . ", " . $mySkills[3] . ", " . $mySkills[4];

echo "<br> <br>";

#Task 2 Assignment 2:
$mySkills = array("HTML" => "4", "CSS" => "4", "JavaScript" => "4", "PHP/MySQL" => "6", "WordPress" => "4");

echo "My skills include: <br>";
    foreach ($mySkills as $s => $v) {
      echo "<ul>";
      echo "<li>" . $s++ .  ": " . $v++ . " " . "weeks long </li> <br>";
      echo "</ul>";
    }


echo "<br> <br>";

#Task 3 Assignment 2:
$mySkills = array("HTML", "CSS", "JavaScript", "PHP/MySQL", "WordPress");
function newList($array){
  echo "<ul>";
  foreach($array as $value){
    echo "<li>$value</li>";
  }
  echo "</ul>";
}
  echo "My skills include:";
  newList($mySkills);


  echo "<br> <br>";
  echo "<hr>";
  echo "<br>";
?>

</body>
</html>