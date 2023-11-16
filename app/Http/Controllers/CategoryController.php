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
        return response()->json(['categories' => $readAllCategoriesAction->execute()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateCategoryAction $createCategoryAction, CategoryRequest $categoryRequest)
    {
        return Inertia::render('Categories/create', ['categories' => $createCategoryAction->execute($categoryRequest->validated())]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryAction $updateCategoryAction, CategoryRequest $categoryRequest, string $id)
    {
        return Inertia::render('Categories/update', ['categories' => $updateCategoryAction->execute($categoryRequest->validated(), $id)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteCategoryAction $deleteCategoryAction, string $id)
    {
        return Inertia::render('Categories/delete', ['categories' => $deleteCategoryAction->execute($id)]);
    }
}
