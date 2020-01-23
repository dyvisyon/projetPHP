<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Exercice</title>
	<?php require "utilities.php"; $form1 = new Form(); ?>
</head>
<body>
	<div>
		<?php include "header.php"?>
	</div>
		

	<div>
		<h1>Story 3</h1>
		<form method="post">
		<?php 
		
		$form1->getInputTypeText("Nombre");
		$form1->getSubmitButton("submit","Ok");
		?>
		</form>

		<?php
		if (sizeof($_POST)>0) {
			$form1->affichePremiers($_POST["Nombre"]);
		}
		?>
	</div>

	<div>
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
	</div>
	<div>
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
	</div>
	<div>
		<h1>Story6</h1>
	    <form method="post">
	    <?php
	        $form1->getInputTypeText("roman");
	        $form1->getSubmitButton("submit","OK");
	        ?>
	    </form>
	    <?php
	        if(sizeof($_POST)>0){
	            $form1->getRomanNumber($_POST["roman"]);
	        }
	    ?>
	</div>
	<div>
		<h1>Story 7</h1>
		<form method="post">
	    <?php
	    $form1->getInputTypeText("Factiorielle");
		$form1->getSubmitButton("submit","Ok");
	    ?>
	    </form>
	    <?php
	    if (sizeof($_POST)>0){
	        $form1->factor($_POST["Factiorielle"]);
	    }
	    ?>
	</div>
	<div>
		<h1>Story 8</h1>
	    <form method="post">
	    <?php
	        $form1->getInputTypeText("Hexadecimal");
	        $form1->getSubmitButton("submit","OK");
	        ?>
	    </form>
	    <?php
	    if (sizeof($_POST)>0){
	        $form1->convertionEnHexa($_POST["Hexadecimal"]);
	    }
	    ?>
	</div>
	<div>
		<h1>Story 9</h1>
	    <form method="post">
	    <?php
	        $form1->getInputTypeText("Binaire");
	        $form1->getSubmitButton("submit","OK");
	        ?>
	    </form>
	    <?php
	    if (sizeof($_POST)>0){
	        $form1->convertionEnBin($_POST["Binaire"]);
	    }
	    ?>
	</div>
	<div>
		<h1>Story 10</h1>
	    <form method="post">
	        <?php 
	            $form1->getInputTypeText("email");
	            $form1->getSubmitButton("submit","OK");
	        ?>
	    </form>
	        <?php 
	            if(sizeof($_POST)>0){
	                $form1->GetVerifyMail($_POST["email"]);
	            }
	        ?>
	</div>
	<div>
		<?php include "footer.php" ?>
	</div>

</body>
</html>