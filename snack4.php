<?php
/*Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.*/

$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis porta consequat. 
             Fusce ligula purus, aliquam in suscipit sed, imperdiet tristique tellus. 
             Quisque dictum libero at lacus euismod malesuada. Vivamus nec arcu tincidunt massa bibendum condimentum et a ipsum. 
             Maecenas egestas ex risus, a consequat elit dignissim malesuada. Nunc convallis interdum enim, ac placerat mauris scelerisque et.
             Nunc sit amet interdum risus, vel blandit sem. Sed tortor libero, rhoncus et erat eget, mollis rutrum eros.
             Donec cursus ornare massa, id ullamcorper risus laoreet quis. ";

 $paragrafoSenzaSpazi = str_replace(" ","",$paragrafo);   //ottengo una stringa
 //echo( $paragrafoSenzaSpazi);
$arrayPragrafiSingoli = explode('.',$paragrafoSenzaSpazi);  //ottengo un array

?>

<h2>Paragrafo con gli spazi tra le parole rimossi:</h2>
<p><?php echo($paragrafoSenzaSpazi) ?></p>

<h2>Array  formato dai vari paragrafi ottenuti dalle frasi del  paragrafo intero(senza gli spazi) separate dal punto:</h2>
<?php 
echo('<pre>');
var_dump($arrayPragrafiSingoli);
echo('</pre>');
?>