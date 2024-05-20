<?php
// Autor: Alice Gonzalez <aliceladybunny@gmail.com>
<<<<<<< HEAD
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
=======
// El nombre por defecto es Mundo
require('HolaMundo.php');

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
>>>>>>> hola
print new HolaMundo($nombre);