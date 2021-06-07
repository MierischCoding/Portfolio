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

<link rel="stylesheet" href="contact.css">

  <!--Google Font Links Here-->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link
href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap"
rel="stylesheet">

  <!--CSS Link(s) Here-->

<link rel="stylesheet" href="http://www.jonathanmierisch.slccwebdev.com/CSS/contact.css">
    <title>Contact Me</title>
</head>

<body>

    <div id="page-container">
    <div id="content-wrap">

    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="jonathanmierisch.slccwebdev.com/home.html" class="navbar-brand">Home</a>
                <img src="http://www.jonathanmierisch.slccwebdev.com/pictures/aboutme.jpg" alt="Logo" height="25" id="aboutimg">
                <ul class="navbar-nav">
                    <button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navContent"
                    aria-controls="navContent"
                    area-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navContent">
                    <li class="navbar-item"><a href="jonathanmierisch.slccwebdev.com/about.html" title="AboutMe"class="nav-link">About Me</a></li>
                    <li class="navbar-item"><a href="jonathanmierisch.slccwebdev.com/contact.html" title="ContactMe"class="nav-link">Contact Me</a></li>
                    <li class="navbar-item"><a href=http://www.jonathanmierisch.slccwebdev.com/PHP/practice.php" title="PHP"class="nav-link">PHP Practice Page</a></li>
                  </div>
                </ul>
            </nav>
    </header>

    <section id="contact">
        <div class="container my-5">
    
        <div class="row justify-content-center text-center">
        <div class="col-md-6">
        <h2 class="display-4 font-weight-bold">Contact Me</h2>
        <hr />
        </div>
        </div>

        <div class="row justify-content-center">
        <div class="col-6">
        <form action="http://form-test.slccwebdev.com/formsuccess.php" method="POST">
        <div class="form-group" required>
        <label for="name">Full Name:</label>
        <input type="text" class="form-control" id="name"
        placeholder="Full Name" name="name" />
        </div>
        <div class="form-group">
        <label for="email" required>Email address:</label>
        <input type="email" class="form-control"
        id="email" placeholder="name@example.com"
        name="email" />
        </div>
        <div class="form-group">
        <label class="control-label">Can we contact you
        back?</label>
        <div class="form-check">
        <input type="radio" class="form-checkinput" name="contact-back" id="yes"
        value="Yes" checked />
        <label class="form-check-label"
        for="yes">Yes</label>
        </div>
        <div class="form-check">
        <input type="radio" class="form-checkinput" name="contact-back" id="no"
        value="No" />
        <label class="form-check-label"for="no">No</label>
    </div>
    </div>

    <div class="form-group">
        <label for="comments">Comments:</label>
    <textarea id="comments" class="form-control"
    rows="3" name="comments"></textarea>
    </div>
    <button class="btn btn-primary mb-2 " type="submit"
    role="button">Submit</button>
    </form>
    </div>
    </div>
    </div>
</section>

<div class="word">
    <span>T</span>
    <span>H</span>
    <span>A</span>
    <span>N</span>
    <span>K</span>
    <BR>
    <span>Y</span>
    <span>O</span>
    <span>U</span>
    <span>!</span>
    <p>&#128515;</p>
</div>

</body>

 <!--JS Scripts Here-->
 <script>
const spans = document.querySelectorAll('.word span');

spans.forEach((span, idx) => {
	span.addEventListener('click', (e) => {
		e.target.classList.add('active');
	});
	span.addEventListener('animationend', (e) => {
		e.target.classList.remove('active');
	});
	
	// Initial animation
	setTimeout(() => {
		span.classList.add('active');
	}, 750 * (idx+1))
});
</script>

<footer class="py-4 bg-dark" id="footer">
    <div class="container">
    <p class="m-0 text-center text-white">
    Copyright &copy; Jonathan Mierisch 2021
    </p>
    </div>
    </footer>
</div>
</html>