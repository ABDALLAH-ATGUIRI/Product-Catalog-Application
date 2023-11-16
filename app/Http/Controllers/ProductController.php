<?php

namespace App\Http\Controllers;

use App\Actions\ProductActions\DeleteProductAction;
use App\Actions\ProductActions\ReadProductAction;
use App\Actions\ProductActions\SearchProductAction;
use App\Actions\ProductActions\ShowOneProductAction;
use App\Actions\ProductActions\UpdateProductAction;
use App\Console\Commands\CreateProduct;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ReadProductAction $readProductAction)
    {
        return Inertia::render('Products/Index', ['products' => $readProductAction]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateProduct $createProductAction, ProductRequest $request)
    {
        return Inertia::render('Products/create', ['products' => $createProductAction($request)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowOneProductAction $showOneProductAction)
    {
        return Inertia::render('Products/show', ['products' => $showOneProductAction]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductAction $updateProductAction, ProductRequest $request, string $id)
    {
        return Inertia::render('Products/update', ['products' => $updateProductAction($request, $id)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteProductAction $deleteProductAction, string $id)
    {
        return Inertia::render('Products/delete', ['products' => $deleteProductAction($id)]);
    }

    /**
     * Search specified product.
     */
    public function search(SearchProductAction $searchProductAction, Request $request)
    {
        return Inertia::render('Products/search', ['products' => $searchProductAction($request)]);
    }
}
