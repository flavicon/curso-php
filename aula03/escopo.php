<?php

$x = 10;

function teste (&$x) {
  $x = 20;
}

teste($x);
echo $x;
