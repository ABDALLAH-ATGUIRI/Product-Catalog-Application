<?php

namespace App\Actions\ProductActions;

use App\Models\Product;

class SearchProductAction
{
    public function execute(array $data)
    {
        $query = Product::query();

        if ($data['category_name']) {
            $query->whereHas('categories', function ($categoryQuery) use ($data) {
                $categoryQuery->where('name', $data['category_name']);
            });
        }

        if ($data['product_name']) {
            $query->where('name', 'like', '%' . $data['product_name'] . '%');
        }

        if ($data['min_price']) {
            $query->where('price', '>=', $data['min_price']);
        }

        if ($data['max_price']) {
            $query->where('price', '<=', $data['max_price']);
        }

        return $query->get();
    }
}
