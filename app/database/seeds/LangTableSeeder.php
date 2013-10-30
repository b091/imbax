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
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'code' => 'gb',
                'name' => 'English',
                'default' => false,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'code' => 'se',
                'name' => 'Sverige',
                'default' => false,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            )
        );

        DB::table('lang')->insert($items);

    }

}