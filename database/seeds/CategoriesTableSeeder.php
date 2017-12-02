<?php

use App\Category;
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
        Category::query()->truncate();
        Category::create([
            'name' => 'Косметика для лица',
            'photo' => '/images/categories/Категория_ косметика для лица2.png',
            'url' => 'kosmetika-dlya-litsa-i-oblasti-shei',
        ]);
        Category::create([
            'name' => 'Уход и очищение кожи',
            'photo' => '/images/categories/Категория_уход_и_очищение3.png',
            'url' => 'uhod-i-ochischenie-kozhi-litsa',
        ]);
        Category::create([
            'name' => 'Косметика для тела',
            'photo' => '/images/categories/Категория_косметика_для_тела.png',
            'url' => 'kosmetika-dlya-tela',
        ]);
        Category::create([
            'name' => 'Косметика для волос',
            'photo' => '/images/categories/Категория_для_волос.png',
            'url' => 'kosmetika-dlya-volos',
        ]);
        Category::create([
            'name' => 'Мыло и бельди',
            'photo' => '/images/categories/Категория_домашнее_мыло.png',
            'url' => 'mylo-i-beldi',
        ]);
        Category::create([
            'name' => 'Подарочные наборы и акции',
            'photo' => '/images/categories/Категория_Наборы_акция.png',
            'url' => 'podarochnye-nabory-i-aktsii',
        ]);
    }
}
