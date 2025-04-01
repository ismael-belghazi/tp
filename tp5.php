<?php

/**
 * Fichier principal pour inclure et utiliser la classe MesDates.
 * Ce fichier est utilisé pour instancier un objet de la classe MesDates
 * et afficher la date de demain.
 * php version 8.3.1.1
 *
 * @category Utility
 * @package  DateFunctions
 * @author   ismael <ismaelbelghazi@yahoo.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://bloup.nvsphr.fr
 */

require_once "versionnage/tp5/src/MesDates.php";

$objDate = new \UPJV\MesDates();
echo $objDate->demain();
