<?php

require_once 'MesDates.php';
$mesDates = new \UPJV\MesDates();

header('Content-Type: application/json');

echo $mesDates->demain();
