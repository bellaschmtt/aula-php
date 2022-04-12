<?php
   //entrada
   //processamento
   //saida


   /*
   funçao somar
   -numero 1
   -numero2

   processamento
    -pegar o numero 1 e adicionar o numero 2

    resultado
    - a soma do numero 1 o numero 2


    exemplo:
    somar 1 3 = 4
    somar 10 5 = 15
    somar 1298399283983938 12739827873 = 
   

   $lista = [10, 6, 8]
   print_r($lista);
   sort($lista);
   print "<br>";
   print_r($lista);
   */

    function somar($numero=0, $numero2=0, $numero3=0){
       $total = $numero + $numero2 + $numero3;
       return $total;
    }
     /*
    $soma = somar(2, 3);
    echo "Total: ".$soma;
    
    $soma = somar(234, 1);
    echo "Total: ".$soma;
    */
    $x = somar(2, 3, 10);
    $y = somar(5);
    $w = somar($x, $y);
    echo "Total: ".$w;

?>