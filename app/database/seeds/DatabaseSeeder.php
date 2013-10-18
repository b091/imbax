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

		$this->call('UsersTableSeeder');
        $this->call('LangTableSeeder');
        $this->call('MenuTableSeeder');
        $this->call('ProductTableSeeder');
        $this->call('ProductsOptionsTableSeeder');
	}

}