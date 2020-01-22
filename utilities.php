<?php

class Form{

	public function getInputTypeText($value){
    	echo '<label for="'.$value.'">'.$value.'</label> :<br>';
    	echo '<input type="text" id="'.$value.'" name="'.$value.'">';
	}

	public function getSubmitButton($action, $text){
		echo '<input type="'.$action.'" value="'.$text.'">';
	}

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

    public function afficheDate($temps){
    

    	$t1 = time();
    	$t2 = $temps;

    	if ($t2 < $t1) {
    		$dateSnd = $t1 - $t2;
    		echo "L'événement à eu lieu le ".date("l j F Y",($dateSnd));
    	}
    	


    }




}
	/*
private $type;

public function __construct($type){
	$this->type = $type;
}

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


?>
*/
?>

