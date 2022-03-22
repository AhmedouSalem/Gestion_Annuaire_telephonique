<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index_projetH.css">
 </head>
 <body alink="red">
   <div id="bc" class="sidenav">
     <a href="welcome.PHP"><img src="logo5.PNG" width="20px" heigth="25px"> HOME</a>
     <a href="index_projet2.php">Etablisment</a><br>
     <a href="cv.php">Le secteur dactiviter</a><br>
     <a href="Les_namber_de_etablisment.php">Les nomber des etablisment</a><br>
     <a href="index.php"><img src="logo3.png" width="28px" heigth="35px"></a>
  </div>

  <article class="con">
     
      <div class="cv1">
         <h1>Ajoute un(e) établisment</h1>
        <form method="post" class="1" action="index2_projet.php">
          <label class="cv">Nom</label><br>
          <input class="cv" id="cv" type="text" name="nm" placeholder="Votre nom.." required><br>
          <table class="cv"><samp class="cv">Description</samp><table>
          <textarea class="cv" name="desict" placeholder="Votre description"></textarea><br>
          <label class="cv">Tél</label><br>
          <input class="cv" id="cv" type="tel" name="tel" placeholder="Votre Tél" maxlength="13" minlength="8" required><br>
          <label class="cv">DateDeCréation</label><br>
          <input class="cv" id="cv" type="date" name="dat" required><br>
          <label class="cv">E-mail</label><br>
          <input class="cv" id="cv" type="email" name="mail" placeholder="Votre e-mail" required><br>
          <label class="cv">Secteur d'activité</label><br>
          <select class="cv" type="text" name="sct">
            <option >informatique</option>
            <option>Récharche </option>
            <option>santé ,Médecine</option>
            <option>Secrité</option>
            <option>Télécommunications</option>
            <option>Services_àlapersonne</option>
            <option>Services_publics</option>
            <option>Asurance</option>
            <option>Commerce</option>
            <option>Communication</option>
            <option>Finance</option>
            <option>Horeca_(Hotellerie,_Restauration,_Café)</option>
            <option>Electricité</option>
            <option>Entretien</option>
            <option>Trasport, Logistique</option>
          </select><br>
          <label class="cv">Adresse</label><br>
          <input class="cv" id="cv" type="text" name="ads" placeholder="Votre adresse" required><br><br>
          <input class="butn" id="batn1" type="reset" value="Annuler">
          <input type="submit" id="batn" class="butn" value="Envoyer">
          <br><br>
       </from>
    </div>
      <!--</div>-->
  </article>  
</body>
</html>   


