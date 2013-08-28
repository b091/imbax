<?php

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        $items = array(
            array(
                'name' => 'Łyżka przedsiębierna RSS ' . rand(100, 1200) . ' HD',
                'short_description' => ' Consectetur lorem',
                'photo' => 'rss_A.jpg'
            ),
            array(
                'name' => 'Łyżka przedsiębierna RSS ' . rand(100, 1200) . ' HD',
                'short_description' => ' Consectetur lorem',
                'photo' => 'rss_B.jpg'
            ),
            array(
                'name' => 'Łyżka przedsiębierna RSS ' . rand(100, 1200) . ' HD',
                'short_description' => ' Consectetur lorem',
                'photo' => 'rss_C.jpg'
            ),
            array(
                'name' => 'Łyżka przedsiębierna RSS ' . rand(100, 1200) . ' HD',
                'short_description' => ' Consectetur lorem',
                'photo' => 'rss_D.jpg'
            ),
            array(
                'name' => 'Łyżka przedsiębierna RSS ' . rand(100, 1200) . ' HD',
                'short_description' => ' Consectetur lorem',
                'photo' => 'rss_E.jpg'
            )
        );

        DB::table('product')->insert($items);
    }

}