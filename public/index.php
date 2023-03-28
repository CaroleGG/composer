<?php

require_once('../vendor/autoload.php');

$bonjour = new App\Hello();

echo $bonjour->talk();