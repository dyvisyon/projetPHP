<!DOCTYPE html>
<html>
<head>
	<title>Exercice</title>
</head>
<body>

	<?php include "header.php"?>

	<h1>Story 3</h1>
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

	<h1>Story 4</h1>
	<form method="post">
	<?php 

	$form1 = new Form();
	$form1->getInputTypeText("Date");
	$form1->getSubmitButton("submit","Ok");

	?>
	</form>

	<?php
	$form1->afficheDate($_POST["Date"]);
	?>

	<h1>Story 5</h1>
	<form method="post">
    <?php
    $form1->getInputTypeText("Croissant");
	$form1->getSubmitButton("submit","Ok");
    ?>
    </form>
    <?php
    if (sizeof($_POST)>0){
        $form1->affichePetitNombre($_POST["Croissant"]);
    }
    ?>



	<?php include "footer.php" ?>

</body>
</html>