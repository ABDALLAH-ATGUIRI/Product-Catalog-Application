<?php

namespace App\Http\Controllers;

use App\Actions\CategoryActions\CreateCategoryAction;
use App\Actions\CategoryActions\DeleteCategoryAction;
use App\Actions\CategoryActions\ReadAllCategoriesAction;
use App\Actions\CategoryActions\UpdateCategoryAction;
use App\Http\Requests\CategoryRequest;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ReadAllCategoriesAction $readAllCategoriesAction)
    {
        return Inertia::render('Categories/Index', ['categories' => $readAllCategoriesAction]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateCategoryAction $createCategoryAction, CategoryRequest $categoryRequest)
    {
        return Inertia::render('Categories/create', ['categories' => $createCategoryAction($categoryRequest)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryAction $updateCategoryAction, CategoryRequest $categoryRequest, string $id)
    {
        return Inertia::render('Categories/update', ['categories' => $updateCategoryAction($categoryRequest, $id)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteCategoryAction $deleteCategoryAction, string $id)
    {
        return Inertia::render('Categories/delete', ['categories' => $deleteCategoryAction($id)]);
    }
}
