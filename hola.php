<?php
// El nombre por defecto es  Mundo
$nombre = isset($argv[1]) ? $argv [1] : "mundo";
@print "hola, {$nombre}\n";

