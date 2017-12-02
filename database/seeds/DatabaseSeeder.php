<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

        $this->call(DeliveriesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
