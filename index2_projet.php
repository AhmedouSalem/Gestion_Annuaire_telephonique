<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="index_projetH.css">
   </head>
 <body>
<?php
//la connexion avec la base de données

$con=mysqli_connect("localhost","root","","db1");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";





//Récupération de données

$nom=$_POST['nm'];
$dsc=$_POST['desict'];
$tel=$_POST['tel'];
$det=$_POST['dat'];
$mail=$_POST['mail'];
$sct=$_POST['sct'];
$ads=$_POST['ads'];

//Insertion de données dans la BD

$sql= "insert into idb_projet (Nom,Desicription,Tél,DateDeCréation,Email,Secteur,Adresse) values ('$nom', '$dsc', '$tel', '$det', '$mail', '$sct', '$ads')";
if(mysqli_query($con,$sql)){
   ?>
<script language="JavaScript">
	alert("bien un rejistrée");
   window.location.replace("index_projet2.php");
	</script> 
	<?php
	 
	//header("location:liste_emp.php");
}
else 
?>
<script language="JavaScript">
	alert("Erreur d'insertion");
   window.location.replace("projet_group3.php");
	</script> 
	<?php	


?>