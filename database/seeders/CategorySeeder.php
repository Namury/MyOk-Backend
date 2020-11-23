<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

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
        	['name' => 'Category 1'],
        	['name' => 'Category 2'],
        	['name' => 'Category 3']
        ];

        foreach ($categories as $category) {
        	$data = new Category;
        	$data->name = $category['name'];
        	$data->save();
        }
    }
}
