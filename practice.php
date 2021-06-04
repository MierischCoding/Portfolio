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

 <title>About Me</title>

</head>
<body>

 <div id="page-container" class="text-secondary">
 <div id="content-wrap">

<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="http://www.jonathanmierisch.slccwebdev.com/home.html" class="navbar-brand">Home</a>
        <img src="http://www.jonathanmierisch.slccwebdev.com/pictures/aboutme.jpg" alt="Logo" height="25" id="aboutimg">
        <ul class="navbar-nav">
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navContent"
            aria-controls="navContent"
            area-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navContent">
            <li class="navbar-item"><a href="http://www.jonathanmierisch.slccwebdev.com/about.html" title="AboutMe"class="nav-link">About</a></li>
            <li class="navbar-item"><a href="http://www.jonathanmierisch.slccwebdev.com/contact.html" title="ContactMe"class="nav-link">Contact Me</a></li>
            <li class="navbar-item"><a href="practice.php" title="ContactMe"class="nav-link">PHP Practice Page</a></li>
          </div>
        </ul>
    </nav>

</header>
<body>

<?php

#Task 1 assignment 1
echo "Hello World!";

#Task 2 assignment 1
$greeting = "Hello World!";
echo "<br> <br>";
echo $greeting;
echo "<br> <br>";

#Task 3 assignment 1
$varOne = 1;
$varTwo = 2;
$totalSum = $varOne + $varTwo;
echo $totalSum;
echo "<br> <br>";

#Task 4 assignment 1
$varThree = 5;
$varFour = 6;
$totalSum2 = $varThree * $varFour;
echo $totalSum2;
echo "<br> <br>";

#Task 5 assignment 1
$varFive = 15;
$varSix = 30;
$totalSum3 = $varFive % $varSix;
echo $totalSum3;
echo "<br> <br>";

?>

</body>
</html>