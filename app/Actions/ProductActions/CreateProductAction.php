<?php

namespace App\Actions\ProductActions;

use App\Helpers\ImageHelper;
use App\Models\Product;

class CreateProductAction
{
    public function execute(array $data)
    {
        try {
            // Create Product
            Product::create([
                'name' => $data['name'],
                'image' => ImageHelper::upload($data['image']),
                'price' => $data['price'],
                'description' => $data['description'],
            ]);

            // Return Json Response
            return response()->json([
                'message' => "Product successfully created."
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went really wrong!'
            ], 500);
        }
    }
}
