<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');

            $table->string('title');

            $table->string('photo');
            $table->text('images')->nullable();

            $table->text('small_description');
            $table->text('description');


            $table->string('config_1');
            $table->float('price_1');
            $table->string('config_2')->nullable();
            $table->float('price_2')->nullable();
            $table->string('config_3')->nullable();
            $table->float('price_3')->nullable();
            $table->string('config_4')->nullable();
            $table->float('price_4')->nullable();
            $table->string('config_5')->nullable();
            $table->float('price_5')->nullable();

            $table->integer('views')->default(1);
            $table->boolean('show')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
