<?php
/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa
 e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte 
 le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 */

 //phpinfo();
 
 $partite = [
    [
        'squadradicasa'=> 'Milano',
        'squadraospite' => 'Roma',
        'punteggiosquadradicasa' => 20,
        'punteggiosquadraospite' => 22
    ],
    [
        'squadradicasa'=> 'Torino',
        'squadraospite' => 'Verona',
        'punteggiosquadradicasa' => 31,
        'punteggiosquadraospite' => 43
    ]
 ];

for($i = 0; $i < count($partite);$i++)
{
    echo('<p>');
    echo($partite[$i]['squadradicasa'] . '-' . $partite[$i]['squadraospite'] . '|' . $partite[$i]['punteggiosquadradicasa'] . '-' . $partite[$i]['punteggiosquadraospite']);
    echo('</p>');
}


 ?>

