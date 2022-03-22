<?php 

include 'cnx.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href=".css">

<style type="text/css">
	body{
    
		background-repeat:no-repeat;
		background-position: center;
		margin-bottom:20px ; 
		background: url(IMG_41.png);
	}
	.a{
		border-radius: 15px;
  		background: #f4a460;
  		padding: 30px;
  		border: 2px dashed #ccc;
 	 	width: 30%;
 		margin: 30px;
  		text-align: center;
  		position: absolute;
		padding-top: 0px;
		margin-left: 30%;
		   
	}
	input[type=text]:focus{
		width: 280px;border-color: white;
	}
	input[type=email]:focus{
		width: 280px;border-color: white;
	}



	input[type=password]:focus{
		width: 280px;border-color: white;
	}
	input[type=submit]:hover {
  	background-color: #f4a460;
	}
	input[type=reset]:hover {
  		background-color: #f4a460;
	}
    input[type="text"],input[type="email"],input[type="password"] {
		width: 100%;
   		text-align: center;
 		padding: 12px;
  		border-radius: 15px ;
  		margin-top: 6px;
  		background: none;
		outline: none;
		border:1px solid #7A238A;
  		margin-bottom: 8px;
  		box-sizing: border-box;
  		background-color: blue;
  		color: white;
	}
	
	input[type="submit"],input[type="reset"]{
		color:;
		background:gre;
		text-align:center;
		border-radius: 6px;
		text-align:center;
		height: 40PX;
		width: 80PX;
	}
	input[type="reset"]:hover{
  		background: red;
	}
	
	h1{
		border: 2px solid  #7A238A;
        border-radius: 15PX;
        text-decoration: none;
    	font-size: 34px;
    	border-bottom: 4px solid rgb(13, 68, 233);
	}
	input[type="submit"]:hover{
  		background: blue;
	}

	
</style>
</head>
<body background="" >
	<div class="a">
		<form action="" method="POST" class="login-email">
            <h1>Annuaire téléphonique pour les établissements</h1>
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
           
            
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			
				<input type="submit" name="submit" value="connexion">
			
			<p >avez vous une compte? <a href="index.php">Entrez ici</a>.</p>
		</form>
	</div>
</body>
</html>