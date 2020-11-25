<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
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

    public function showSingleItem($id)
    {
        $item = Item::where('id', $id)->first();

        return response()->json( [
            'item' => $item,
        ], 200);
    }

    public function createItem(Request $request)
    {
        try {
    		DB::beginTransaction();

    		$item = new Item;
    		$item->name = $request->input('name');
    		$item->category_id = $request->input('category_id');
    		$item->image = $request->input('image');
            $item->save();

    		DB::commit();
    	} catch (Exception $e) {
    		DB::rollBack();
    		return response()->json( [
                'entity' => 'items', 
                'action' => 'create', 
                'result' => 'failed'
            ], 409);
        }
        
        return response()->json( [
            'entity' => 'users', 
            'action' => 'create', 
            'result' => 'success'
        ], 201);
    }

    public function editItem($id)
    {
        try {
    		DB::beginTransaction();

    		$item = Item::where('id', $id);
    		$item->name = $request->input('name');
    		$item->category_id = $request->input('category_id');
    		$item->image = $request->input('image');
            $item->save();

    		DB::commit();
    	} catch (Exception $e) {
    		DB::rollBack();
    		return response()->json( [
                'entity' => 'items', 
                'action' => 'create', 
                'result' => 'failed'
            ], 409);
        }
        
        return response()->json( [
            'entity' => 'users', 
            'action' => 'create', 
            'result' => 'success'
        ], 201);
    }

    public function deleteItem($id)
    {

    }
}