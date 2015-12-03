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
		$this->call('SentryGroupSeeder');
		$this->call('SentryUserSeeder');
		$this->call('OrganizationSeeder');
		$this->call('SentryUserGroupSeeder');
		$this->call('ProduseSeeder');
		$this->call('BanciSeeder');
}

}
