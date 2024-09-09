<?php
 
$num1=25;
$divisor10= 10;
$divisor5= 5;
$divisor2= 2;
 
if ($num1 % $divisor10 == 0){
   echo "" .$num1. " é divisível por 10";
 
}
   elseif ($num1 % $divisor5 == 0){
    echo "".$num1. " é divisível por 5";
   }
   elseif ($num1 % $divisor2 == 0){
    echo "".$num1. " é divisível por 2";
   }
   else
      echo "" .$num1. " não é divisível por 10, 5 e 2";

?>