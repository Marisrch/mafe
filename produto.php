<?php 

    $op = 'A';

    echo 'escolha um destes: <br/>' ;
    echo ' <br/> A - Maçã do amor; <br/> ';
    echo 'B - Canjica da Joana; <br/>';
    echo 'C - Pastel de queijo; <br/>';
    echo 'D - Milho verde; <br/>';
    
    switch ($op) {
    	case 'A':
    		echo ' <br/> você escolheu maçã do amor!';
    		break;
    	
    	case 'B':
            echo 'você escolheu a canjica da joana!';
    	break;

    	case 'C':
    		echo 'você escolheu pastel de queijo!';
    		break;

    	case 'D':
    		 echo 'você escolheu milho verde!';
    		break;

    	default: echo 'você não escolheu nada!!';
    		break;
    }


 ?>