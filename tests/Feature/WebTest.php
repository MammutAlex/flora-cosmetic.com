<?php

namespace Tests\Feature;

use App\Category;
use App\Product;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class WebTest extends TestCase
{
    use WithoutMiddleware;
    public function testVisitIndexPage()
    {
        $this->get(route('index'))->assertStatus(200);
    }

    public function testVisitProductsPage()
    {
        $this->get(route('products'))->assertStatus(200);
    }

    public function testVisitProductDetailPage()
    {
        $this->get(route('product', Product::first()->id))->assertStatus(200);
    }

    public function testVisitCategoriesPage()
    {
        $this->get(route('categories', Category::first()->url))->assertStatus(200);
    }

    public function testCreateByInOneClick()
    {
        $this->post(route('product', Product::first()->id), [
            'phone' => '+380 23 423-42-34',
            'product' => '1',
        ])->assertRedirect('/');
    }
}
