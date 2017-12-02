<?php

use App\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::query()->truncate();
        SubCategory::create([
            'category_id' => 1,
            'title' => 'Легкая серия',
            'url' => 'legkaya-seriya',
        ]);
        SubCategory::create([
            'category_id' => 1,
            'title' => 'Серия Актив',
            'url' => 'seriya-aktiv',
        ]);
        SubCategory::create([
            'category_id' => 1,
            'title' => 'Пептидная серия',
            'url' => 'peptidnaya-seriya',
        ]);
        SubCategory::create([
            'category_id' => 1,
            'title' => 'Солнцезащитная серия',
            'url' => 'solntsezaschitnaya-seriya',
        ]);
        SubCategory::create([
            'category_id' => 1,
            'title' => 'Другое',
            'url' => 'drugoe',
        ]);

        SubCategory::create([
            'category_id' => 2,
            'title' => 'Средства для снятия макияжа',
            'url' => 'sredstva-dlya-snyatiya-makiyazha',
        ]);
        SubCategory::create([
            'category_id' => 2,
            'title' => 'Скрабы пилинги маски',
            'url' => 'skraby-pilingi',
        ]);
        SubCategory::create([
            'category_id' => 2,
            'title' => 'Убтан',
            'url' => 'ubtan',
        ]);

        SubCategory::create([
            'category_id' => 3,
            'title' => 'Крема',
            'url' => 'krema',
        ]);
        SubCategory::create([
            'category_id' => 3,
            'title' => 'Скрабы',
            'url' => 'skraby',
        ]);
        SubCategory::create([
            'category_id' => 3,
            'title' => 'Антицеллюлитная косметика',
            'url' => 'antitsellyulitnaya-kosmetika',
        ]);

        SubCategory::create([
            'category_id' => 4,
            'title' => 'Шампуни',
            'url' => 'shampuni',
        ]);
        SubCategory::create([
            'category_id' => 4,
            'title' => 'Маски',
            'url' => 'maski',
        ]);
        SubCategory::create([
            'category_id' => 4,
            'title' => 'Спреи и масла',
            'url' => 'sprei-i-masla',
        ]);

        SubCategory::create([
            'category_id' => 5,
            'title' => 'Мыло',
            'url' => 'mylo',
        ]);
        SubCategory::create([
            'category_id' => 5,
            'title' => 'бельди',
            'url' => 'beldi',
        ]);

        SubCategory::create([
            'category_id' => 6,
            'title' => 'Подарочные наборы',
            'url' => 'podarochnye-nabory',
        ]);

        SubCategory::create([
            'category_id' => 6,
            'title' => 'Aкции',
            'url' => 'aktsii',
        ]);
    }
}
