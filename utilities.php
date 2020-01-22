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

}



?>

