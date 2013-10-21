<?php

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        // our array of user objects to create - just one in this case
        $users = array(
            array(
                'username' => 'admin',
                'email' => 'skrzypkowiak@gmail.com',
                'password' => Hash::make('futura25'),
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'username' => 'js',
                'email' => 'j.slabysz@gmail.com',
                'password' => Hash::make('futura123'),
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
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