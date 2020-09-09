<?php 
    echo "Dame un número: ";
    $n1 = (int) readline();

    echo "Dame otro número: ";
    $n2 = (int) readline();

    $suma = $n1 + $n2;
    $rest = $n1 - $n2;
    $mult = $n1 * $n2;
    $divi = $n1 / $n2;

    echo "Resultados:\n";
    echo "$n1 + $n2 = $suma\n";
    echo "$n1 - $n2 = $rest\n";
    echo "$n1 x $n2 = $mult\n";
    echo "$n1 / $n2 = $divi\n";
    
?>