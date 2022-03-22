<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="index_projet.css">
</head>
<body id="cvc"></body>
<?php
    
    $con=mysqli_connect("localhost","root","","db1");
    if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
    else "OK";
$sql = "SELECT COUNT(ID) `nbb` FROM `idb_projet`";
$resultat = mysqli_query($con,$sql);
    if(mysqli_num_rows($resultat)>0)
        {
         while($row=mysqli_fetch_assoc($resultat)){
            echo "<h1> Les nomber des élablisment est: <span>" . $row['nbb'] . "<span></h1>";
            echo "<h1>Click pour retourné <a href='welcome.php'><img width='44' height='22' src='mA1.JPG'></a></h1>";
        }
        }
    else
        {
            echo "Erreur";
        }    

?>	
