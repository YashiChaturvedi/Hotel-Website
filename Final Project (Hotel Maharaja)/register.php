<!doctype html>
<html>
<head>
<title>User Registration</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  body{
	  height: 100%; 
	  background-image:url('hotel2.jpg');
	  background-position: center;
	  background-repeat: no-repeat;
      background-size: cover;
  }

  div.transbox form{
	  opacity:0.9;
  }
  </style>
   
</head>
<body>
<center>

<div class="form-group w-50">
	<div class="transbox">
<form action="" method="post" class="text-center border border-dark p-5 m-5" style="background-color:#a8dadc">
<h1>Registration Hotel Maharaja</h1>

<label>Name :</label><input type="text" name="user" class="form-control"></br>
<label>Password:</label><input type="password" name="pass" class="form-control"><br/>
<label>Email:</label><input type="email" name="email" class="form-control"><br/>
<input type="submit" value="Register" name="submit" class="form-control btn btn-info"><br/><br/>
<!-- Login Link -->
<a href="login.php" class="form-control btn btn-success">Login</a>
</div>
</div>

</form>
<?php
if(isset($_POST["submit"])){
	if(!empty($_POST['user']) && !empty($_POST['pass'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$email = $_POST['email'];
		$conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
		$db = mysqli_select_db($conn, 'test') or die("DB Error"); // Select DB from database
		//Selecting Table
		$query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."'");
		$numrows = mysqli_num_rows($query);
		if($numrows == 0)
		{
			//Insert to Mysqli Query
			$sql = "INSERT INTO userpass(user,pass,email) VALUES('$user','$pass','$email')";
			$result = mysqli_query($conn, $sql);
			//Result Message
			if($result){
				echo "<script type='text/javascript'>alert('Account Created !!');</script>";
			}
			else
			{
				echo "Failure!";
			}
		}
		else
		{
			echo "That Username already exists! Please try again.";
		}
	}
	else
	{
		?>
		<!--Javascript Alert -->
        <script>alert('Required all felds');</script>
        <?php
	}
}
?>
</center>
</body>
</html>