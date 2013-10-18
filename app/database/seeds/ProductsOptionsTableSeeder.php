<?php

class ProductsOptionsTableSeeder extends Seeder
{

    public function run()
    {
        $options = array(
            array(
                'title' => 'Hardox 400',
                'type' => 'flag',
                'color' => '#FFC32E'
            ),
            array(
                'title' => 'Hardox 450',
                'type' => 'flag',
                'color' => '#FD5214'
            ),
            array(
                'title' => 'Hardox 500',
                'type' => 'flag',
                'color' => '#FD5214'
            ),
        );

        DB::table('products_options')->insert($options);
    }

}