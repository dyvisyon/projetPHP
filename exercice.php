<!DOCTYPE html>
<html>
<head>
	<title>Exercice</title>
</head>
<body>

	<?php include "header.php"?>

	
	<form method="post">
	<?php 
	require "utilities.php";

	$form1 = new Form();
	$form1->getInputTypeText("Nombre");
	$form1->getSubmitButton("submit","Ok");




	?>
	</form>

	<?php
	if (sizeof($_POST)>0) {
		$form1->affichePremiers($_POST["Nombre"]);

	}





	?>



	<?php include "footer.php" ?>

</body>
</html>