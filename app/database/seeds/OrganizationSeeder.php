<?php

class OrganizationSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizatii')->truncate();

        \Credite\Organizatie::createRecord([
            'denumire' => 'CreditFin',
        ]);


    }

}