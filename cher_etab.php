<?php
if(isset($_POST['btn'])){
header ("location:cher_etab_result_result.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="index_projetH.css">
</head>
<body>

<h1 id="h">chercher un établissement</h1>
<form method="post" id="cv1" action="cher_etab_result.php"></form>
	<fieldset id="c3">
		<div id="c1">
<label id="cv">Nom ou Email</label>
<input type="text" id="cv" name="nm" placeholder="Votre nom ou Email..." >
<input type="submit" id="cv" value="Envoyer" name="btn">
<br>

</div>
</fieldset>
</body>
