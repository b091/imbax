<?php

class ProductsOptionsTableSeeder extends Seeder
{

    public function run()
    {
        $options = array(
            array(
                'title' => 'Hardox 400',
                'type' => 'flag',
                'color' => '#FFC32E',
                'created_at' =>  date('Y-m-d'),
                'updated_at' =>  date('Y-m-d'),
            ),
            array(
                'title' => 'Hardox 450',
                'type' => 'flag',
                'color' => '#FD5214',
                'created_at' =>  date('Y-m-d'),
                'updated_at' =>  date('Y-m-d'),
            ),
            array(
                'title' => 'Hardox 500',
                'type' => 'flag',
                'color' => '#FD5214',
                'created_at' =>  date('Y-m-d'),
                'updated_at' =>  date('Y-m-d'),
            ),
        );

        DB::table('products_options')->insert($options);
    }

}