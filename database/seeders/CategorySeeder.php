<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::insert([
            'id' => 1,
            'name' => 'hand bag',
            'image' => '20220726092454.png',

        ]);

        Category::insert([
            'id' => 2,
            'name' => 'Cosmetics',
            'image' => '20220726093954.png',
        ]);

        Category::insert([
            'id' => 3,
            'name' => 'Mans Shoes',
            'image' => '20220726100101.png',
        ]);

        Category::insert([
            'id' => 4,
            'name' => 'Womens Shoes',
            'image' => '20220726100300.png',
        ]);

        Category::insert([
            'id' => 5,
            'name' => 'Men Clothes',
            'image' => '20220726101443.png',
        ]);

        Category::insert([
            'id' => 6,
            'name' => 'Women Clothes',
            'image' => '20220726101916.png',
        ]);

        Category::insert([
            'id' => 7,
            'name' => 'Kids Clothes',
            'image' => '20220726103526.png',
        ]);

    }
}
