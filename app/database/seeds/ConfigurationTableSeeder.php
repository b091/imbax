<?php

class ConfigurationTableSeeder extends Seeder
{

    public function run()
    {
        $items = array(
            array(
                'lang_code' => 'pl',
                'label' => 'Tytuł strony',
                'type' => 'text',
                'name' => 'title',
                'value' => 'IMBAX',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'pl',
                'label' => 'Słowa kluczowe',
                'name' => 'keywords',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'pl',
                'label' => 'Opis',
                'name' => 'description',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'pl',
                'label' => 'Telefon kontaktowy',
                'name' => 'phone',
                'type' => 'text',
                'value' => '+ 48 656 656 658',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'pl',
                'label' => 'Mail-e formularza',
                'name' => 'mail',
                'type' => 'text',
                'value' => 'onw@example.com;two@example.com',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'gb',
                'label' => 'Tytuł strony',
                'name' => 'title',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'gb',
                'label' => 'Słowa kluczowe',
                'name' => 'keywords',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'gb',
                'label' => 'Opis',
                'name' => 'description',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'gb',
                'label' => 'Telefon kontaktowy',
                'name' => 'phone',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'se',
                'label' => 'Tytuł strony',
                'name' => 'title',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'se',
                'label' => 'Słowa kluczowe',
                'name' => 'keywords',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'se',
                'label' => 'Opis',
                'name' => 'description',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'lang_code' => 'se',
                'label' => 'Telefon kontaktowy',
                'name' => 'phone',
                'type' => 'text',
                'value' => '',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
        );

        DB::table('configuration')->insert($items);

    }

}