<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Item1', 'image' => 'image placeholder', 'category_id' => 1 ],
            ['name' => 'Item2', 'image' => 'image placeholder', 'category_id' => 2 ],
            ['name' => 'Item3', 'image' => 'image placeholder', 'category_id' => 3 ],
            ['name' => 'Item4', 'image' => 'image placeholder', 'category_id' => 1 ],
        ];

        foreach ($items as $item) {
        	$data = new Item;
        	$data->name = $item['name'];
        	$data->image = $item['image'];
        	$data->category_id = $item['category_id'];
        	$data->save();
        }
    }
}
