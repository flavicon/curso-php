<?php

//se piccolo kamisama também morrerá
$piccolo = "vivo";
$kamisama = "vivo";

$piccolo = &$kamisama;

$piccolo = "morto";

echo "Piccolo: {$piccolo}",PHP_EOL;
echo "Kamisama: {$kamisama}",PHP_EOL;
