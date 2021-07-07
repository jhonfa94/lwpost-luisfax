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
        //https://dummyimage.com/200x150/5C5756/fff
        Category::create([
            'name' => 'CURSOS',
            'image' => 'https://dummyimage.com/200x150/5C5756/fff'
        ]);
        Category::create([
            'name' => 'TENIS',
            'image' => 'https://dummyimage.com/200x150/5C5756/fff'
        ]);
        Category::create([
            'name' => 'CELULARES',
            'image' => 'https://dummyimage.com/200x150/5C5756/fff'
        ]);
        Category::create([
            'name' => 'COMPUTADORAS',
            'image' => 'https://dummyimage.com/200x150/5C5756/fff'
        ]);
    }
}
