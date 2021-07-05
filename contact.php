<?php 
		if (!isset($_SESSION['KEY'])){
			session_start();
		}

		$nameErr = $emailErr = $contBackErr = "";
		$name = $email = $contBack = $comment = "";
		$formErr = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (empty($_POST["name"])) {
				$nameErr = "Name is required.";
				$formErr = true;
			} else {
				$name = cleanInput($_POST["name"]);
				//Use REGEX to accept only letters and white spaces
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and standard spaces allowed.";
					$formErr = true;
				}
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Email is required.";
				$formErr = true;
			} else {
				$email = cleanInput($_POST["email"]);
				// Check if e-mail address is formatted correctly
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Please enter a valid email address.";
					$formErr = true;
				}
			}
			
			if (empty($_POST["contact-back"])) {
				$contBackErr = "Please let us know if we can contact you back.";
				$formErr = true;
			} else {
				$contBack = cleanInput($_POST["contact-back"]);
			}
			
			$comment = cleanInput($_POST["comments"]);
		}

		function cleanInput($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) {  

			//table name: jm_sp21_Contacts
			$hostname = "php-mysql-exercisedb.slccwebdev.com";
			$username = "phpmysqlexercise";
			$password = "mysqlexercise";
			$databasename = "php_mysql_exercisedb";
		
			try {
			  //Create new PDO Object with connection parameters
			  $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
			  
			  //Set PDO error mode to exception
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			  
				//Variable containing SQL command with placeholders
				$sql = "INSERT INTO jm_sp21_Contacts (name, email, contactBack, comments)
						VALUES (:name, :email, :contactBack, :comments);";
		
				//Create prepared statement
				$stmt = $conn->prepare($sql);
		
			  //Bind parameters to variables
			  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
			  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
			  $stmt->bindParam(':contactBack', $contBack, PDO::PARAM_STR);
			  $stmt->bindParam(':comments', $comments, PDO::PARAM_STR);
		
			   //Execute SQL statement on server
				$stmt->execute();

				//Create thank you message
				$_SESSION['message'] = '<p class="gont-weight-bold>Thank you for your submission!</p>
				<p class="font-weight-light">Your request has been sent.</p>';
				
				$_SESSION['complete'] = true;
			
			//Redirect
			header('Location: ' . $_SERVER['REQUEST_URI']);
			exit;

		  } catch (PDOException $error) {
			$_SESSION['message'] = '<p>We apolgize, the form was not submitted successfully. Please try again later</p>';

			$_SESSION['complete'] = true;

			//Redirect
			header('Location: ' . $_SERVER['REQUEST_URI']);
			exit;
		  }
		
			try {
				//Create new PDO Object with connection parameters
				$conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
				
				//Set PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
				
				//Variable containing SQL command
				$sql = "SELECT * FROM jm_sp21_Contacts;";        
		
				//Execute SQL statement on server
				$return = $conn->query($sql);
		
		
			} catch (PDOException $error) {
		
				//Return error code if one is created
				echo "Execution error: <br>" . $sql . "<br>" . $error->getMessage();
			}
		
			$conn = null;


		} 
?>

<!DOCTYPE html>
<html lang="en">
<head>

      <!--BootStrap Links Here-->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!--JQuery Links-->
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

  <!--CSS Links Here-->

<link rel="stylesheet" href="http://www.jonathanmierisch.slccwebdev.com/CSS/contact.css">
    <title>Contact Me</title>
</head>

<body>

<header>

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
                <li class="navbar-item"><a href="http://www.jonathanmierisch.slccwebdev.com/PHP/practice.php" title="PHP"class="nav-link">PHP Practice Page</a></li>
            </div>
            </ul>
        </nav>
     <!--Nav Bar End-->
</header>
	<!-- Contact Form Section -->
	<section id="contact">
		<div class="container py-5">
			<!-- Section Title -->
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<h2 class="display-4 font-weight-bold">Contact Me</h2>
					<hr />
				</div>
			</div>
			<!-- Contact Form Row -->
			<div class="row justify-content-center">
				<div class="col-6">
				
					<!-- Contact Form Start -->
					<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>
						
						<!-- Name Field -->
						<div class="form-group">
							<label for="name">Full Name:</label>
							<span class="text-danger">*<?php echo $nameErr; ?></span>
							<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="<?php if(isset($name)) {echo $name;}?>"" />
							
						</div>
						
						<!-- Email Field -->
						<div class="form-group">
							<label for="email">Email address:</label>
							<span class="text-danger">*<?php echo $emailErr; ?></span>
							<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php if(isset($email)) {echo $email;} ?>" />
						</div>
						
						<!-- Radio Button Field -->
						<div class="form-group">
							<label class="control-label">Can we contact you back?</label>
							<span class="text-danger">*<?php echo $contBackErr; ?></span>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes"  <?php if ((isset($contBack)) && ($contBack == "Yes")) {echo "checked";}?>/>
								<label class="form-check-label" for="yes" >Yes</label>
							</div>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="no" value="No" <?php if ((isset($contBack)) && ($contBack == "No")) {echo "checked";}?>/>
								<label class="form-check-label" for="no" >No</label>
							</div>
						</div>
						
						<!-- Comments Field -->
						<div class="form-group">
							<label for="comments">Comments:</label>
							<textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset($comment)) {echo $comment;} ?></textarea>
						</div>

						<!-- Required Fields Note-->
						<div class="text-danger text-right">* Indicates required fields</div>
						
						<!-- Submit Button -->
						<button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
					</form>
					
				</div>
			</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="thankYouModalLabel">Thank You</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<?php echo $_SESSION['message']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	</section>

	<!--Show Modal-->
	<?php
		if(isset($_SESSION['complete']) && $_SESSION['complete'])  {
		echo "<script>$('#thankYouModal').modal('show');</script>";	
		session_unset();

		}
	?>
	
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
</div>
</html>