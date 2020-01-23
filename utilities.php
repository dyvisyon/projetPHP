<?php

class Form{

	// Affiche un textfield en prenant en id et en valeur ce qui est donné en paramètre.
	public function getInputTypeText($value){
    	echo '<label for="'.$value.'">'.$value.'</label> :<br>';
    	echo '<input type="text" id="'.$value.'" name="'.$value.'">';
	}

	// Affiche un textfield en prenant en type et en valeur ce qui est donné en paramètre.
	public function getSubmitButton($action, $text){
		echo '<input type="'.$action.'" value="'.$text.'">';
	}

	//Affiche tout les nombre premiers entre 0 et le nombre entré.
	public function affichePremiers($n){
        echo "Les nombres premiers entre 0 et ".$n." sont : ";
        $negatif = false;
        if($n<0){
            $negatif = true;
            $n = -$n;
        }
        //On prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
        for($i=2;$i<=$n;$i++){
            $nbDiv = 0;//Et on compte le nombre de diviseur    
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $nbDiv++;            
                }
            }
            if($nbDiv == 2){
		    //Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et
		    // lui-même)
                if($negatif){
                    echo "-";
                }
                echo $i.", ";
            }
        }
    }

    // Affiche la date avec le format : jour ## mois année
    public function afficheDate($temps){
    
    	$t1 = time();
    	$t2 = $temps;

    	// Si le nombre de secondes entrées sont inferieurs a celles de la date machine, alors on affiche la date d'il y a $temps (en seconde)
    	if ($t2 < $t1) {
    		$dateSnd = $t1 - $t2;
    		echo "L'événement à eu lieu le ".date("l j F Y",($dateSnd));
    	}
    }

    // Affiche le nombre le plus petit parmis plusieurs entrées dans la texte field
    public function affichePetitNombre($NombreSaisi){

    	//Split par les virgules les nombres saisis et les ajoute dans une liste.
        $tabNombre = preg_split("[,]", $NombreSaisi);
        $pluspetit=1000000000000;
        
        //boucle sur la liste et remplace le $value par la valeur la plus petite, pour renvoyé celle-ci une fois la liste entière verifiée.
        foreach($tabNombre as $value){
            if($pluspetit>$value){
                $pluspetit=$value;
            }
        }
        echo "Le nombres le plus petit est : " . $pluspetit;
	}


	public function factor($myNumber1){
    	$result = 1;
    	for($myNumber1; $myNumber1 >= 1; $myNumber1--){
        	$result *= $myNumber1;
    	}
    	echo "La factorielle est :".$result;
 	}

 	public function getRomanNumber($number){
	    $basicRomanNumbers = array( 'M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I');
	    $basicNumbers = array( 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1);
	    // Un nombre au dessus de 4999 ne pourra pas être écrit.
	    if ($number > 4999) $number = 4999;
	    // Le zero n'existant pas. si l'entrée est égale à 0 il sera traduit en 1.
	    if ($number <= 0) $number = 1;
	    // Les Nombre seront arrondis
	    $number = (int) $number;
	    // initialisation de la boucle de variable
	    $romanNumber = '';
	    $i = 0;
	    while($number > O)
	    {
	        if($number >= $basicNumbers[$i])
	        {
	            $number = $number - $basicNumbers[$i];
	            $romanNumber = $romanNumber.$basicRomanNumbers[$i];
	        }
	        else
	        {
	            $i++;
	        }
	    }
	    //return $romanNumber;
	        echo "voici votre chiffre en chiffre romain :".$romanNumber;
	}

	public function convertionEnHexa($hexaConv){
        $case1= dechex($hexaConv);
        echo "voici la convertion en Hexadecimal de :".$case1;
    }

    public function convertionEnBin($binConv){
        $case1= decbin($binConv);
        echo "voici la convertion en Binaire de :".$case1;
    }

    public function getInputTypeEmail($value){
        
       
        echo '<label for="'.$value.'">'.$value.'</label>:<br>';
        echo'<input type="text" id="'.$value.'" name="'.$value.'">';
                
    }
    
    public function GetVerifyMail($valeur){
        if(preg_match('/.*[@].*\..*/', $valeur) && (strlen($valeur)>3)){
            echo "adresse mail valide";
        } else {
            echo "adresse mail invalide";
        }
    
        
        
    }



// on split


    //on ajoute a une liste


    //on prend les mots de la liste pour les mettre dans une autre list


    //on print la liste















}



?>

