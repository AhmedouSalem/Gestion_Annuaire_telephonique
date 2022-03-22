<?php 

include 'cnx.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
    input[type="email"],input[type="password"] {
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
	input[type="email"]:hover{
  		background: blue;
	}

	
</style>
</head>
<body background="" >
	<div class="a">
		<form action="" method="POST" class="login-email">
			<h1>Annuaire téléphonique pour les établissements</h1>
			
				<label>Utilisateur:<br></label><input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required><br>
			
		
				<label>Mot de Passe:<br></label><input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
			
			<tr><td></td><td><input type="submit" name="submit" value="connexion">
				
			
			<p >avez vous une compte? <a href="register.php">Enregistrez vous</a>.</p>
		</form>
	</div>
</body>
</html>