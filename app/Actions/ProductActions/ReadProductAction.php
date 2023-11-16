<?php

namespace App\Actions\ProductActions;

use App\Models\Product;

class ReadProductAction
{
    public function execute()
    {
        $products = Product::paginate(10);

        return [
            'products' => $products->items(),
            'current_page' => $products->currentPage(),
            'per_page' => $products->perPage(),
            'total' => $products->total(),
            'last_page' => $products->lastPage(),
        ];
    }
}
