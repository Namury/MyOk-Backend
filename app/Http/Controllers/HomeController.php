<?php

namespace App\Http\Controllers;

use App\Models\Item;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }
    
    public function showAllItem()
    {
        $items = Item::all();

        return response()->json( [
            'items' => $items,
        ], 200);
    }
}