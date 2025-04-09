<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/MesDates.php';
use UPJV\MesDates;

class MesDatesTest extends TestCase
{
    public function testedemain()
    {
        $mesDates = new MesDates();
        $result = $mesDates->demain();

        $this->assertJson($result, 'La méthode ne retourne pas un JSON valide.');

        $decoded = json_decode($result, true);

        $this->assertArrayHasKey('demain', $decoded, 'La clé "demain" est manquante dans le JSON.');

        $expectedDate = (new DateTime('tomorrow'))->format('d-m-Y');
        $this->assertEquals($expectedDate, $decoded['demain'], 'La date retournée ne correspond pas à celle de demain.');
    }
}
