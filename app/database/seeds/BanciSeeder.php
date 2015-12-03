<?php

class BanciSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $banci = [
        [
            'data' => ['id' => '1', 'nume' => 'Alpha Bank', 'id_organizatie' => '1'],
            'produse' => [1,2,3,4,5,6]
        ],
        [
            'data' => ['id' => '2', 'nume' => 'Banca Comercială Carpatică', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '3', 'nume' => 'Veneto Bank', 'id_organizatie' => '1'],
            'produse' => [7]
        ],
        [
            'data' => ['id' => '4', 'nume' => 'Banca Romanească', 'id_organizatie' => '1'],
            'produse' => [32,33]
        ],
        [
            'data' => ['id' => '5', 'nume' => 'Banca Transilvania', 'id_organizatie' => '1'],
            'produse' => [8,9,10,11,12,13]
        ],
        [
            'data' => ['id' => '6', 'nume' => 'Bancpost', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '7', 'nume' => 'BCR', 'id_organizatie' => '1'],
            'produse' => [34,35]
        ],
        [
            'data' => ['id' => '8', 'nume' => 'BRD', 'id_organizatie' => '1'],
            'produse' => [36,37]
        ],
        [
            'data' => ['id' => '9', 'nume' => 'Emporiki Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '10', 'nume' => 'CEC', 'id_organizatie' => '1'],
            'produse' => [14,15]
        ],
        [
            'data' => ['id' => '11', 'nume' => 'CreditEurope Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '12', 'nume' => 'GarantiBank', 'id_organizatie' => '1'],
            'produse' => [38,39,40,41]
        ],
        [
            'data' => ['id' => '13', 'nume' => 'ING Bank', 'id_organizatie' => '1'],
            'produse' => [16,17]
        ],
        [
            'data' => ['id' => '14', 'nume' => 'Idea Bank', 'id_organizatie' => '1'],
            'produse' => [18,19]
        ],
        [
            'data' => ['id' => '15', 'nume' => 'Intesa Sanpaolo Bank', 'id_organizatie' => '1'],
            'produse' => [20,21]
        ],
        [
            'data' => ['id' => '16', 'nume' => 'Leumi Bank', 'id_organizatie' => '1'],
            'produse' => [22,23]
        ],
        [
            'data' => ['id' => '17', 'nume' => 'Libra Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '18', 'nume' => 'Marfin Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '19', 'nume' => 'Millennium Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '20', 'nume' => 'MKB Romexterra Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '21', 'nume' => 'OTP Bank', 'id_organizatie' => '1'],
            'produse' => [24,25,26]
        ],
        [
            'data' => ['id' => '22', 'nume' => 'Piraeus Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '23', 'nume' => 'ProCredit Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '24', 'nume' => 'Raiffeisen Bank', 'id_organizatie' => '1'],
            'produse' => [27,28,29,30,31]
        ],
        [
            'data' => ['id' => '25', 'nume' => 'RBS', 'id_organizatie' => '1'],
            'produse' => []
        ],
        [
            'data' => ['id' => '26', 'nume' => 'UniCredit Bank', 'id_organizatie' => '1'],
            'produse' => []
        ],
    ];

    public function run()
    {
        DB::table('banci')->truncate();

        foreach($this->banci as $k => $banca){
            $object = \Credite\Banca::createRecord($banca['data']);
            $object->produse()->attach($banca['produse']);
        }


    }

}