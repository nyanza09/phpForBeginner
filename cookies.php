<?php


setcookie( 'name', 'nabeel', time()+3600, '/', '', false ); 

echo "<a href=\" controller/coviewer.php \">view cookie</a>";

?>