<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Contact::create([
            'text' => 'Звоните, пишите, с радостью отвечу на Ваши вопросы'
        ]);
        \App\Contact::create([
            'text' => '+380 66 524-69-02'
        ]);
        \App\Contact::create([
            'text' => '+380 96 019-27-57'
        ]);
        \App\Contact::create([
            'text' => 'info@flora-cosmetic.com'
        ]);
    }
}
