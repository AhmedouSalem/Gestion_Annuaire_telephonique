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

//Affichage de données
echo "<h1 >"."Liste des établisment "." <a href='cv.php'><img width='44' height='22' src='mA1.JPG'></a></h1>";
echo "<table  id='c' border >";
echo "<tr  id='c' >";
echo "<th width='10px' class='df' id='c'>". "ID". "</th>";
echo "<th  id='c'>". "Nom". "</th>";
echo "<th  id='c' width='100px'> ". "Desicription". "</th>" ;
echo "<th  id='c'>". "Tél". "</th>" ;
echo "<th  id='c'> ". "Date de création". "</th>" ;
echo "<th  id='c'>". "E-mail". "</th>" ;
echo "<th  id='c'>". "Secteur_d'activité". "</th>" ;
echo "<th id='c'>". "Adresse". "</th>" ;
echo "<th id='c' colspan='2'>". "Action". "</th>"."</tr>" ;
$sectur = $_GET['edit_id'];
$sql= "SELECT * FROM `idb_projet` WHERE `Secteur` = '$sectur'";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($row=mysqli_fetch_assoc($resultat)){
	$id = $row['ID'];
	echo "<tr id='c'>";
	echo"<td id='c'>".$row['ID']."</td>";
	echo"<td id='c'>".$row['Nom']."</td>"; 
	echo "<td id='c'>".$row['Desicription']."</td>";
	echo "<td id='c'>".$row['Tél']."</td>";
	echo "<td id='c'>".$row['DateDeCréation']."</td>";
	echo "<td id='c'>".$row['Email']."</td>";
	echo "<td id='c'>".$row['Secteur']."</td>";
	echo "<td id='c'>".$row['Adresse']."</td>";
		
	?>
	<td id='c' align="center">
        <a href="modifier.php?edit_id=<?php print($id); ?>" ><img id="c1" width="40" height="22" src="IMG3.png.JPG" ></a>        
	</td>			
    <td id='c'  align="center">            
        <a  href="suprime.php?delete_id=<?php print($id); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer  ?')">
			<img id="c2" width="44" height="22" src="IMG7.png.JPG" ></a>        
    </td>            
				
                
<?php
	
	
	
	echo "</tr>";
  	
	
	
}	
} else 
{
	echo "<tr>";
	echo "<td colspan='4'>";
echo  "Aucun enregistrement";
echo "</td>";
}
echo "</table>";
?>