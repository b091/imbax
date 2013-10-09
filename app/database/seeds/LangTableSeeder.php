<?php

class LangTableSeeder extends Seeder
{

    public function run()
    {
        $items = array(

            array(
                'code' => 'pl',
                'name' => 'Polski',
                'default' => true,
            ),
            array(
                'code' => 'gb',
                'name' => 'English',
                'default' => false,
            ),
            array(
                'code' => 'se',
                'name' => 'Sverige',
                'default' => false,
            )
        );

        DB::table('lang')->insert($items);

    }

}