<?php
    require 'index2_projet.php';
    $id = $_GET['delet_id'];
    $sql = "delete from idb_projet where id-pro = $id";
    $resultat = mysqli_query($con,$sql);

        if(isset($resultat))
        {
            header ("location: index2_projet.php");
        }
        else
        {
            echo "Erreur";
        }    

?>	