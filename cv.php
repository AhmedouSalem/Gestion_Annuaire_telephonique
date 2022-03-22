<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index_projet.css">
    <title>Document</title>
</head>
<body alink="#FF00FF" link="#4B0082" vlink="7A238A">
<?php
$con=mysqli_connect("localhost","root","","db1");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";
//Affichage de données
echo "<h1 >"."Liste des établisment par secteur d'activité "."  <a href='welcome.php'><img width='44' height='22' src='mA1.JPG'></a></h1>";
echo "<table  id='c' border >";
echo "<tr  id='c' >";
echo "<th id='c' ><h3>Les Secteur d'activité </h3></th>"; 
echo "<th id='c' width='50%' ><h3>Action</h3></th></tr>" ;

$sql= "SELECT DISTINCT `Secteur` FROM `idb_projet`";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($row=mysqli_fetch_assoc($resultat)){
    $id = $row['Secteur'];
    echo "<tr id='c'>";
    echo"<td id='c'>".$row['Secteur']."</td>";
?>    
    <td id='c' align="center">
    <a href="Idex_projet_clasment.php?edit_id=<?php print($id); ?>" >clîké_Pour_visualisé_Plus</a>        
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


   