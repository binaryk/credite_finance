<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('OrganizatiiTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('TipIntermediariTableSeeder');
		$this->call('TipCategorieImobilsTableSeeder');
		$this->call('JudetTableSeeder');
		$this->call('LocalitatiTableSeeder');
		$this->call('CartiersTableSeeder');
		$this->call('TipStadiuAnsamblusTableSeeder');
		$this->call('TipImobilsTableSeeder');
		$this->call('DezvoltatorsTableSeeder');
		$this->call('AnsambluRezidentialsTableSeeder');
		$this->call('ZonaAcoperireDezvoltatorsTableSeeder');
		$this->call('IntermediarImobilsTableSeeder');
		$this->call('TelefoanesTableSeeder');
		$this->call('ImobilsTableSeeder');
		$this->call('ApartamentsTableSeeder');
	}

}
