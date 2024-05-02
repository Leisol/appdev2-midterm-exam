<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
         "id" => 1,
         "name" => "Shirt",
         "price" => 100,
         "description" => "This is a shirt",
         "image" => "laptop.jpg",
         "category_id" => 1
        ],
        [
         "id" => 2,
         "name" => "Skirt",
         "price" => 300,
         "description" => "This is a skirt",
        ],
        [
         "id" => 3,
         "name" => "Pants",
         "price" => 600,
         "description" => "These are a pants",
        ],
        [
         "id" => 4,
         "name" => "Watch",
         "price" => 200,
         "description" => "This is a watch",
        ],
        [
         "id" => 5,
         "name" => "Blouse",
         "price" => 500,
         "description" => "This is a blousa",
        ],
     ];

    public function index()
    {
        return response()->json($this->products);
    }

    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully."
        ]);
    }

    public function show(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " created successfully."
        ]);
    }

    public function destroy( string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " deleted successfully."
        ]);
    }

    public function uploadImageLocal($image)
    {
        return response()->json([
            "message" => "Image successfully stored in local disk driver."
        ]);
       
    }

    public function uploadImagePublic($image)
    {
        return response()->json([
            "message" => "Image successfully stored in public disk driver."
        ]);
       
    }
    

}

