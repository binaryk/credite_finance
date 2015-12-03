<?php

class ProduseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $produse = [
        [ 'id' => '1', 'nume' => 'credit de nevoi personale cu dobanda fixa -1'],
        [ 'id' => '2', 'nume' => 'credit de nevoi personale cu dobanda variabila-2'],
        [ 'id' => '3', 'nume' => 'credit de nevoi personale garantat cu ipoteca-3'],
        [ 'id' => '4', 'nume' => 'credit de nevoi personale cu destinatie imobiliara/amenajari-4'],
        [ 'id' => '5', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '6', 'nume' => 'credit prima casa-6'],
        [ 'id' => '7', 'nume' => 'credit imobiliar/ipotecar'],
        [ 'id' => '8', 'nume' => 'credit de nevoi personale cu dobanda fixa -1'],
        [ 'id' => '9', 'nume' => 'credit imobiliar/ipotecar'],
        [ 'id' => '10', 'nume' => 'credit de nevoi personale cu dobanda variabila-2'],
        [ 'id' => '11', 'nume' => 'credit de nevoi personale garantat cu ipoteca-3'],
        [ 'id' => '12', 'nume' => 'credit prima casa'],
        [ 'id' => '13', 'nume' => 'credit de nevoi personale cu destinatie imobiliara/amenajari-4'],
        [ 'id' => '14', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '15', 'nume' => 'credit prima casa-6'],
        [ 'id' => '16', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '17', 'nume' => 'credit prima casa-6'],
        [ 'id' => '18', 'nume' => 'credit de nevoi personale cu dobanda fixa -1'],
        [ 'id' => '19', 'nume' => 'credit de nevoi personale cu dobanda variabila-2'],
        [ 'id' => '20', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '21', 'nume' => 'credit prima casa-6'],
        [ 'id' => '22', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '23', 'nume' => 'credit prima casa-6'],
        [ 'id' => '24', 'nume' => 'credit de nevoi personale cu dobanda fixa -1'],
        [ 'id' => '25', 'nume' => 'credit de nevoi personale cu dobanda variabila-2'],
        [ 'id' => '26', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '27', 'nume' => 'credit de nevoi personale cu dobanda fixa -1'],
        [ 'id' => '28', 'nume' => 'credit de nevoi personale cu dobanda variabila-2'],
        [ 'id' => '29', 'nume' => 'credit de nevoi personale garantat cu ipoteca-3'],
        [ 'id' => '30', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '31', 'nume' => 'credit prima casa-6'],
        [ 'id' => '32', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '33', 'nume' => 'credit prima casa-6'],
        [ 'id' => '34', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '35', 'nume' => 'credit prima casa-6'],
        [ 'id' => '36', 'nume' => 'credit imobiliar/ipotecar-5'],
        [ 'id' => '37', 'nume' => 'credit prima casa-6'],
        [ 'id' => '38', 'nume' => 'credit de nevoi personale cu dobanda fixa -1'],
        [ 'id' => '39', 'nume' => 'credit de nevoi personale cu dobanda variabila-2'],
        [ 'id' => '40', 'nume' => 'credit de nevoi personale garantat cu ipoteca-3'],
        [ 'id' => '41', 'nume' => 'credit imobiliar/ipotecar-5'],

    ];

    public function run()
    {
        DB::table('produse')->truncate();
        DB::table('banca_produs')->truncate();

        foreach($this->produse as $k => $banca){
            \Credite\Produs::createRecord($banca);
        }


    }

}