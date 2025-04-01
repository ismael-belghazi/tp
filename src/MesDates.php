<?php

/**
 * Ce fichier contient la classe MesDates
 * pour gérer les fonctionnalités liées aux dates.
 * php version 8.3.1.1
 *
 * @category Utility
 * @package  DateFunctions
 * @author   insset <accueil@insset.u-picardie.fr>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.insset.u-picardie.fr
 */

declare(strict_types=1);

namespace UPJV;

/**
 * Classe responsable de fournir des opérations liées aux dates,
 * comme retourner la date de demain.
 * php version 8.3.1.1
 *
 * @category Utility
 * @package  DateFunctions
 * @author   ismael <ismaelbelghazi@yahoo.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://bloup.nvsphr.fr
 */

class MesDates
{
    /**
     * Renvoie un objet JSON avec la date de demain.
     *
     * @return string Chaîne JSON contenant la date de demain.
     */
    public function demain(): string
    {
        $demain = new \DateTime('tomorrow');
        $formattedDate = $demain->format('d-m-Y');

        return json_encode(
            ['demain' => $formattedDate],
            JSON_THROW_ON_ERROR
        );
    }
}
