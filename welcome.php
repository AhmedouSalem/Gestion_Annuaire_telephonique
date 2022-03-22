<?PHP
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="index_Welcome.css">
    <title>Document</title>
</head>
<body alink="#e40606" vlink="#293133">
    <div class="b1">
        <div class="cv">
            <form method="post" id="cv1" action="cher_etab_result.php">
                <table>
                    <tr>
                        <th>
                            <a href="projet_group3.php">Se Connecter</a>
                        </th>
                        <th>
                            <a href="index_projet2.php">Liste des établisments</a>
                        </th>
                        <th>
                            <a href="cv.php">Les secteur d'activité</a>
                        </th>
                        <th> 
                            <a href="Les_namber_de_etablisment.php">Les nombres des établisments</a>
                        </th>
                        <th><a href="logout.php">Déconnexion</a></th>
                    </tr>
                </table>

            </form>
        </div>
        <div id="c1">
            <form method="post" id="c1v" action="cher_etab_result.php">
                <fieldset class="cv3">
                    <input type="search" id="vv" class="cv2" name="nm" placeholder="Votre Nom ou Email..." >
                    <input type="submit"  class="cv2" value="Recherche" name="btn">
                </fieldset>
            </form>
        </div>    
        <div class="b2">
            <p>Contactez-nous</p>
            <p>Créé a 2021-04-20</p>  
        </div>
    </div>
</body>
</html>
