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
        $frais=0;
        foreach ($this->tableaufrais as $key => $value) {
            $sep = explode("-", $key);
            if (intval($sep[0]) <= $montant && intval($sep[1]) > $montant) {
                $frais=$value;
                break;
            }
        }
        return $frais;
    }

  
}
