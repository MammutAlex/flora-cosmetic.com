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
            'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'
        ]);
        \App\Contact::create([
            'text' => '124, Munna Wali Dhani, Lalchandpura, Niwaru Road, Jhotwara, Jaipur, Rajsthan, 302012'
        ]);
        \App\Contact::create([
            'text' => 'Telephone: 1800.123.4534'
        ]);
        \App\Contact::create([
            'text' => 'Fax: 1800.123.4534'
        ]);
    }
}
