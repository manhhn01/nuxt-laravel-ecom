<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Models\ProductOption;
use App\Models\ProductVariant;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        User::factory()->create([
            'email' => 'manhhn01@gmail.com'
        ]);
        $productAttributes = ProductAttribute::factory(10)->create();
        $customer = Customer::factory()->create();
        $products = Product::factory(10)
            ->has(
                ProductVariant::factory(3)
                    ->has(
                        ProductOption::factory(2),
                        'options'
                    ),
                'variants'
            )
            ->hasAttached($productAttributes, ['value' => rand(1, 100)], 'attributes')
            ->has(
                    Review::factory(5)
                        ->for($customer)
                )
            ->create();
    }
}
