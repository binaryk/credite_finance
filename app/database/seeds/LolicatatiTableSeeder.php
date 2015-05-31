<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocalitatiTableSeeder extends Seeder {
	protected $localitati = [ 
	];
	public function run()
	{
		DB::table('localitati')->delete();
		$faker = Faker::create();
		Imobiliare\Nomenclator\Localitate::insert($this->localitati); 
	}

}