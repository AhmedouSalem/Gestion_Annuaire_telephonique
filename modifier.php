<?php
  //la connexion avec la base de données
$con=mysqli_connect("localhost","root","","db1");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";

  if ($_GET['edit_id']){
    $id = $_GET['edit_id'];
    $sq = "SELECT * FROM `idb_projet` WHERE `ID` = '$id'";
    $resultat = mysqli_query($con,$sq);

    if($resultat){
      $row = mysqli_fetch_assoc($resultat);

      $nom=$row['Nom'];
      $dsc=$row['Desicription'];
      $tel=$row['Tél'];
      $dt=$row['DateDeCréation'];
      $mail=$row['Email'];
      $sct=$row['Secteur'];
      $ads=$row['Adresse'];
    }
    else echo "Controler votre requette";

  }
  if (isset($_POST['btn-save']))
  {
    
    $no=$_POST['nom'];
    $ds=$_POST['nom1'];
    $te=$_POST['nom2'];
    $dtt=$_POST['nom3'];
    $mai=$_POST['nom4'];
    $sc=$_POST['nom5'];
    $ad=$_POST['nom6'];
    $sql = "UPDATE `idb_projet` SET `Nom` = '$no' , `Desicription` = '$ds' , `Tél` = '$te' ,
     `DateDeCréation` = '$dtt', `Email` = '$mai' , `Secteur` = '$sc' , `Adresse` = '$ad' WHERE `ID` = '$id'";
    $resultat = mysqli_query($con,$sql);
    if($resultat)
    {
      header ("location: index_projet2.php");
    }
    else 
    {
      echo "erreur";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="index_projet1.css" >
</head>
<body link="#4FC031" alink="#FF0921" vlink="#FBF2B7">
   <div class="con">
     <div id="c1">
     <h1>Modifier un établisment <a href="index_projet2.php"><img width="44" height="22" src="mA1.JPG"></a></h1>
     <form action="" method="POST">
       <label for="" id="cv">Nom</label><br>
       <input type="text" id="cv" name="nom" value="<?php if(isset($_GET['edit_id'])){print $nom;}?>" required><br>
       <label for="" id="cv">Description</label><br>
       <textarea type="text" id="cv" name="nom1" ><?php if(isset($_GET['edit_id'])){print $dsc;}?></textarea><br>
       <label for="" id="cv">Tél</label><br>
       <input type="tel" id="cv" name="nom2" value="<?php if(isset($_GET['edit_id'])){print $tel;}?>" required><br>
       <label for="" id="cv">Date_De_Création</label><br>
       <input type="date" id="cv" name="nom3" value="<?php if(isset($_GET['edit_id'])){print $dt;}?>" required><br>
       <label for="" id="cv">Email</label><br>
       <input type="email" id="cv"name="nom4" value="<?php if(isset($_GET['edit_id'])){print $mail;}?>" required><br>
       <label for="" id="cv">Secteur</label><br>
       <select id="cv" name="nom5">
              <option><?php if(isset($_GET['edit_id'])){print $sct;}?></option>
              <option id="cv">informatique</option>
              <option>Récharche </option>
              <option>santé ,Médecine</option>
              <option>Secrité</option>
              <option>Télécommunications</option>
              <option>Services àlapersonne</option>
              <option>Services publics</option>
              <option>Asurance</option>
              <option>Commerce</option>
              <option>Communication</option>
              <option>Finance</option>
              <option>Horeca_(Hotellerie,_Restauration,_Café)</option>
              <option>Electricité</option>
              <option>Entretien</option>
              <option>Trasport, Logistique</option>
            </select><br>
       <label for="" id="cv">Adress</label><br>
       <input type="text" id="cv" name="nom6" value="<?php if(isset($_GET['edit_id'])){print $ads;}?>" required><br><br>
       <button id="" type="submit" value="Modifier" name="btn-save">Envoyer</button> <br><br>
      </div> 
   </form>
   </div>
</body>
</html>