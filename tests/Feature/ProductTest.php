<?php

namespace Tests\Feature;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_user_can_list_most_popular_products()
    {
        factory(Product::class, 10)->create();
        factory(Product::class)->create([
            'views' => 10
        ]);

        $response = $this->get('/products');

        $response->assertStatus(200)
            ->assertJson(['data' => [ ['views' => 10] ]]);
    }
}
