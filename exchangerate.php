<?php
$fahrenheit = $_GET["fahrenheit"];
$celsius= ($fahrenheit - 32) * 5 / 9; 
echo $celsius;
?>
