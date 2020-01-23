<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>La Poste</title>

</head>
<body>

	<?php include "header.php"?>

	<form method="post">

		<div>
			<label for="destSelect">Destinataire :</label>
			<select name="destinataire" id="destSelect">
			    <option>lui</option>
			    <option>un autre</option>
			    <option>un autre que lui</option>
			</select>
		</div>
		<br>
		<div>
			<label for="expeSelect">Expéditeur :</label>
			<select name="expediteur" id="expeSelect">
			    <option>Quelqu'un</option>
			    <option>Quelqu'un d'autre</option>
			    <option>Quelqu'un d'autre que lui</option>
			</select>
		</div>
		<br>
		<div>
			<label for="timbre">Timbre prioritaire</label>
			<input type="checkbox" id="timbre" name="timbre">
	  	</div>
  		<br>

  		<div>
	  		<label for="confidentiel">Confidentiel</label>
	  		<input type="checkbox" id="confidentiel" name="confidentiel">
	  	</div>
	  	<br>
	  	<div>
	  		<input type="submit" value="Valider">
	  	</div>
	  	

		

	</form>


	<?php include "footer.php" ?>

</body>
</html>