
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel Maharaja | Contact </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/yourcode.js"></script>
		<!--<link rel="stylesheet" type="text/css" href="style.css">-->
		
		
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&family=Oswald&display=swap" rel="stylesheet">
	</head>
	<body>
		<!---start-Wrap--->
			<!---start-header--->
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="index.html"><img src="images/logo2.png" title="logo" /></a>
                           
						</div>
                         <img src="images/maharajalogo.png" align="center" width=700px height=150 px>
						<div class="contact-info">
							<p class="phone">Call us : <a href="#">98828223xx</a></p>
							<hr>
							<p class="gpa">Gps : <a href="#top123">View map</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				
				<header>
					<!-- NAVIGATION BAR -->
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse">
					
					   <a class="navbar-brand" href="#" style="font-family: 'Oleo Script', cursive;">Welcome to our Website..!!</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
						  <li class="nav-item active">
							<a class="nav-link" href="index.html" style="font-family: 'Oswald', sans-serif;">HOME</a>
						  </li>
						 
						  <li class="nav-item">
							<a class="nav-link" href="about.html" style="font-family: 'Oswald', sans-serif;">ABOUT</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="services.html" style="font-family: 'Oswald', sans-serif;">SERVICES</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="gallery.html" style="font-family: 'Oswald', sans-serif;">GALLERY</a>
						  </li>
						  
						  <li class="nav-item">
							<a class="nav-link" href="contact.php" style="font-family: 'Oswald', sans-serif;">CONTACT</a>
						  </li>
						</ul>
					  </div>
					</nav>
					</header>

				
			<!---End-header--->
			<div class="clear"> </div>
			<!---start-content----->
			<div class="content">
				<div class="wrap">
					<!-------start-contatct------>
					<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	
      				</div>
                    <img src="images/ECOMMERCE_Icons_Service-512.png" align="left" width=180px height=200px>
      		
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post"  action=""  netlify >
                     
                           
					    	<div>
						    	<span><label>Enter Email Id</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
                                <span><label>Enter Feedback</label></span>
                                <textarea name="feedback" rows="10" cols="30" placeholder="Please enter your valuable feeback."></textarea>
                                
						    </div>
						   
						   <div>
						   		<span><input  style="background-color: green;" type="submit" value="Submit"></span>
						  </div>
                                </fieldset>
						</form>
						

						
						<?php 
 							 //creating connection to database
							$con=mysqli_connect("localhost","root","","test") or die(mysqli_error());
							//check whether submit button is pressed or not
							if((isset($_POST['submit'])))
							{
							//fetching and storing the form data in variables
							
							$Email = $con->real_escape_string($_POST['email']);
							
							$comments = $con->real_escape_string($_POST['feedback']);
							//query to insert the variable data into the database
							$sql="INSERT INTO contact (email, feedback) VALUES ('".$Email."','".$comments."')";
							//Execute the query and returning a message
							if(!$result = $con->query($sql)){
							die('Error occured [' . $conn->error . ']');
							}
							else
							echo "Thank you! We will get in touch with you soon";
							}
							?>


				    </div>
  				</div>				
			  </div>
			</div>
					<!-------start-contatct------>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">
				
				</div>
				<div class="box center-box">
					<ul>
						<li><a href="contact.html">Leave a Feedback</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="about.html">Know About Us</a></li>
						<li><a href="https:www.quora.com/What-is-trekking">Know about Moutaineering and trekking here</a></li>
					</ul>
				</div>
                     <div id="top123"> 
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7535.3290894386555!2d72.86521972472372!3d19.209848698044947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0e57647569d%3A0xc0aec329c82d3555!2sThakur%20College%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1596821982114!5m2!1sen!2sin" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
				<div class="box">
					 
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-box---->
		</div>
        <!---start-copy-Right----->
		<div class="copy-tight">
			<p>&copy HOTEL MAHARAJA, MUMBAI 2020</p>
		</div>
		<!---End-copy-Right----->
		
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->
<!-- <script>
function myFunction() {
    var person = prompt("Please enter your name", "Your Name");
    if (person != null) {
        alert("Thank you for your response  " + person + "! Have a nice day");

    }
}
</script> -->

	</body>
</html>

