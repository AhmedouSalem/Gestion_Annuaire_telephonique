<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","db1");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";
$id = $_GET['delete_id'];
$sql = "DELETE FROM `idb_projet` WHERE `ID` = '$id'";
$resultat = mysqli_query($con,$sql);
       if(isset($resultat)) 
       {
        header ("location: index_projet2.php");
    }
    else 
    {
      echo "erreur";
    }
?>