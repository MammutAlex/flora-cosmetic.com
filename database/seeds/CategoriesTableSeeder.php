<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'name' => 'Косметика для лица и области шеи',
            'photo' => '/images/categories/Категория_ косметика для лица2.png',
            'url' => 'kosmetika-dlya-litsa-i-oblasti-shei',
        ]);
        \App\Category::create([
            'name' => 'Уход и очищение кожи лица',
            'photo' => '/images/categories/Категория_уход_и_очищение3.png',
            'url' => 'uhod-i-ochischenie-kozhi-litsa',
        ]);
        \App\Category::create([
            'name' => 'Косметика для тела',
            'photo' => '/images/categories/Категория_косметика_для_тела.png',
            'url' => 'kosmetika-dlya-tela',
        ]);
        \App\Category::create([
            'name' => 'Косметика для волос',
            'photo' => '/images/categories/Категория_для_волос.png',
            'url' => 'kosmetika-dlya-volos',
        ]);
        \App\Category::create([
            'name' => 'Мыло и бельди',
            'photo' => '/images/categories/Категория_домашнее_мыло.png',
            'url' => 'mylo-i-beldi',
        ]);
        \App\Category::create([
            'name' => 'Подарочные наборы и акции',
            'photo' => '/images/categories/Категория_Наборы_акция.png',
            'url' => 'podarochnye-nabory-i-aktsii',
        ]);
    }
}
