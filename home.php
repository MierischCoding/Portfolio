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

    <!--Google Font Links Here-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap"
rel="stylesheet">

  <!--CSS Link(s) Here-->
  <link rel="stylesheet" href="http://www.jonathanmierisch.slccwebdev.com/CSS/home.css">
   
    <title>Home Page</title>
</head>

<body>

    <!--Nav Bar Begin-->
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
                <p>|</p>
                <li class="navbar-item"><a href="http://www.jonathanmierisch.slccwebdev.com/portfolio.html" title="Portfolio"class="nav-link">Portfolio of Projects</a></li>
                <p>|</p>
                <li class="navbar-item"><a href="http://www.jonathanmierisch.slccwebdev.com/PHP/contact.php" title="ContactMe"class="nav-link">Contact Me</a></li>
                <p>|</p>
            </div>
            </ul>
        </nav>
     <!--Nav Bar End-->

<header class="mainHeader">
<div class="container-fluid h-100">
    <div class="row h-100 align-items-center justify-content-center 
    text-center text-white style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="col-lg-8">
<h1 class="display-1 font-weight-bold">Portfolio of <span class="font-weight-light">Jonathan Mierisch</span></h1>

<hr class="bg-white my-5">
 
<p class="font-weight-light" class="btn btn-primary btn-lg mt-3 bg-white">I am a current student at SLCC interested in starting a career in Web
Development. This is my first website! Please click the link below to find out more about me.</p>
<script>
    document.getElementById("Greeting").innerHTML = "Hello " + name + "," + " please use the link below to explore my Portfolio"
</script>

<a href="http://www.jonathanmierisch.slccwebdev.com/PHP/about.php" class="btn btn-light" id="findoutmore" onclick="myFunction()">Find Out More!</a>
 <br>
<br>
</div>
    </div>
        </div>
</header>
<footer class="py-4 bg-dark">
    <div class="container">
    <p class="m-0 text-center text-white">
    Copyright &copy; Jonathan Mierisch 2021
    </p>
    </div>
    </footer>
</body>

   <!--JS Scripts Here-->
   <script type="text/javascript" src="http://www.jonathanmierisch.slccwebdev.com/JS/home.js"></script>

</html>