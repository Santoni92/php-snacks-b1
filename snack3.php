<?php
/*Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */
$arrayNumeriCasuali = [];
while(count($arrayNumeriCasuali < 15))
{
    $numeroCasuale = rand(1,100);
    if(!in_array($numeroCasuale,$arrayNumeriCasuali))
    {
        $arrayNumeriCasuali[$i] = $numeroCasuale;
    }
}
//echo("L\'array dei numeri casuali risulta: $arrayNumeriCasuali");
echo('<pre>');
var_dump($arrayNumeriCasuali);
echo('</pre>');
?>