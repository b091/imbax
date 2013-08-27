<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	// our array of user objects to create - just one in this case
      $users = array(
      	array(
      		'username' => 'admin',
      		'email' => 'skrzypkowiak@gmail.com',
      		'password' => Hash::make('futura25')
      	)
      );

      DB::table('users')->insert($users);

      // OR - alternative method since there's just one user
//
//      User::create(
//      	array(
//      		'username' => 'admin',
//      		'email' => 'admin@3211231.com',
//      		'password' => Hash::make('password')
//      	)
//      );
    }

}