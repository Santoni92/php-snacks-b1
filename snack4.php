<?php
/*Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.*/

$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis porta consequat. 
             Fusce ligula purus, aliquam in suscipit sed, imperdiet tristique tellus. 
             Quisque dictum libero at lacus euismod malesuada. Vivamus nec arcu tincidunt massa bibendum condimentum et a ipsum. 
             Maecenas egestas ex risus, a consequat elit dignissim malesuada. Nunc convallis interdum enim, ac placerat mauris scelerisque et.
             Nunc sit amet interdum risus, vel blandit sem. Sed tortor libero, rhoncus et erat eget, mollis rutrum eros.
             Donec cursus ornare massa, id ullamcorper risus laoreet quis. "
$arraySingoliParagrafi[] = explode('.',$paragrafo);
var_dump($arraySingoliParagrafi);


?>