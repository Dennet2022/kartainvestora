<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Gold',
                'slug' => 'gold'
            ],
            [
                'name' => 'Stocks',
                'slug' => 'stocks'
            ],
            [
                'name' => 'Bonds',
                'slug' => 'bonds'
            ],
            [
                'name' => 'Real Estate',
                'slug' => 'real-estate'
            ],
            [
                'name' => 'Commodities',
                'slug' => 'commodities'
            ],
            [
                'name' => 'Crypto',
                'slug' => 'crypto'
            ],
        ];

        foreach ($categories as $category) {
            Category::create(
                [
                    'name' => $category["name"],
                    'slug' => $category["slug"],
                ]
            );
        }
    }
}
