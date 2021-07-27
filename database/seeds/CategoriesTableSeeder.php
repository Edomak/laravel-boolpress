<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "backend",
            "frontend",
            "UX",
            "UI",
            "Network"
        ];

        foreach($categories as $category) {   
            $newCategory = new Category();

            $newCategory->name = $category;
            $newCategory->slug = Str::slug($newCategory->name, '-');

            $newCategory->save();
        }
    }
}
