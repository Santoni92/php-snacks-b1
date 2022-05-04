<?php
/*Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name
 sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

 $name = $_GET['name'];
 $mail = $_GET['mail'];
 $age = $_GET['age'];

 /*
 if(!empty($_GET))   //ci ritorna true quando il valore che andiamo a controlalre è vuoto
 {
    if(isset($name) && isset($mail) &&  isset($age))
    {
       if(strlen($name) <= 3 || !(strpos($mail,'@') && strpos($mail,'.')) || is_nan($age))  
       {
           echo('Accesso negato!!!');
       }else{
           echo('Accesso riuscito!!!');
       }
    }else{
        echo("Inserire parametri nell'url!!!");
    }

 }*/

 if(!empty($_GET))  /*ci ritorna true quando il valore che andiamo a controlalre è vuoto;questo controllo ci serve perchè 
                      nel caso inserissimo nulla il codice verrebbe eseguito ugualmente,invece,noi vogliamo eseguire il codice solo quando l'utente invia effettivamente dei dati*/
 {
     if(!isset($name) && strlen($name) <=3)
     {
         echo('Accesso negato!!!Hai inserito un nome errato');
     }

     elseif(!isset($mail) && (strpos(mail,'@') === false || strpos(mail,'.')=== false))
     {
         echo('Accesso negato!!!Hai inserito una mail errata');
     }

     elseif(!isset($age) || is_numeric(age))
     {
         echo('Accesso negato!!!Non hai inserito un numero per l\'età valido');
     }

     else{
         echo('Accesso negato');
     }
 }
 
?>