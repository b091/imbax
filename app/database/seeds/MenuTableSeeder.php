<?php

class MenuTableSeeder extends Seeder
{

    public function run()
    {
        // our array of user objects to create - just one in this case
        $items = array(
            array(
                'title' => 'O nas',
                'pagelink' => 'onas.html',
                'module' => 'BaseControler',
                'method' => 'Index',
                'content' => ''
            ),
            array(
                'title' => 'Oferta',
                'pagelink' => 'oferta.html',
                'module' => 'BaseControler',
                'method' => 'Index',
                'content' => ''
            ),
            array(
                'title' => 'Produkty',
                'pagelink' => 'produkty.html',
                'module' => 'BaseControler',
                'method' => 'Index',
                'content' => ''
            ),
            array(
                'title' => 'Galeria',
                'pagelink' => 'galeria.html',
                'module' => 'BaseControler',
                'method' => 'Index',
                'content' => ''
            ),
            array(
                'title' => 'Kontakt',
                'pagelink' => 'kontakt.html',
                'module' => 'BaseControler',
                'method' => 'Index',
                'content' => ''
            )
        );

        DB::table('menu')->insert($items);


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