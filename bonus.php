<?php
/*Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i 
suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */

$alunni = [
    [
        "nome" => "Silvio",
        "cognome" => "Antonioli",
        "voti" => [5,7.5,6]
    ],
    [
        "nome" => "Michele",
        "cognome" => "Spiller",
        "voti" => [8,9,7.5]
    ],
    [
        "nome" => "Riccardo",
        "cognome" => "Scrizzi",
        "voti" => [8,7.5,9.5]
    ]
    ];

for($i = 0; $i < count($alunni); $i++)
{
    echo('<p>');
    $sommaVotiSingoloAlunno = 0;
    for($j = 0; $j < count($alunni[$i]["voti"]); $j++)
    {
        $sommaVotiSingoloAlunno += $alunni[$i]["voti"][$j];
    }
    $mediaVotiSingoloAlunno = $sommaVotiSingoloAlunno / count($alunni[$i]["voti"]);
    echo($alunni[$i]["nome"] . ' ' . $alunni[$i]["cognome"] . ' ' . 'media dei voti: ' . $mediaVotiSingoloAlunno);
    echo('</p>');
}
?>