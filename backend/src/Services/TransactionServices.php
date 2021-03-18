<?php

namespace App\Services;

class TransactionServices
{

    private $tableaufrais = [
        "0-5000" => 425,
        "5000-10000" => 850,
        "10000-15000" => 1270,
        "15000-20000" => 1695,
        "20000-50000" => 2500,
        "50000-60000" => 3000,
        "60000-75000" => 4000,
        "75000-120000" => 5000,
        "120000-150000" => 6000,
        "150000-200000" => 7000,


    ];

    public function fraisEnvoi($montant)
    {
        $frais = 0;
        foreach ($this->tableaufrais as $key => $value) {
            $sep = explode("-", $key);
            if (intval($sep[0]) <= $montant && intval($sep[1]) > $montant) {
                $frais = $value;
                break;
            }
        }
        return $frais;
    }

    public function envoiesms($numero, $montant, $code, $nom)
    {
        $sid = "AC3d76f4ba21a37f3af4ba24c95eafb971"; // Your Account SID from www.twilio.com/console
        $token = "e4b7d801964ffddd78c38535576a342a"; // Your Auth Token from www.twilio.com/console

        $client = new \Twilio\Rest\Client($sid, $token);
        $message = $client->messages->create(
            '+221' . $numero, // Text this number
            [
                'from' => '+12054305961', // From a valid Twilio number
                'body' => 'Bienvenue dans Money SA ! , vous venez de recevoir ' . $montant . ' de la part de ' . $nom . ' Code de Transaction : ' . $code
            ]
        );

        print $message->sid;
    }
}
