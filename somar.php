<?php 

	//criando uma função tradicional
    function soma(){
        $num1 = 10;
        $num2 = 20;
        $resp = $num1 + $num2;
        echo $resp. "</br>" ;


    }



    function somar($num1,$num2){

    	$resp = $num1+$num2;
    	echo $resp ."</br>";
    }
    //execuntando uma função
    soma();

    //execuntando uma função com parâmetros
    somar(20,30);


    function somarValores($num1, $num2){
    	return ($num1 + $num2);
    }
    echo "</br> Somando Valores: " . somarValores(50,60);
 ?>                                             