<?php 
$usuario = 'root';
$clave = '';
$servidor ='localhost';
$base = 'desarrollo';
$l = @mysqli_connect($servidor,$usuario,$clave) or die('ERROR con el servidor');
@mysqli_select_db($l,$base) or die ("ERROR al conectarse a la db");
@mysqli_set_charset($l,'utf8');
?> 