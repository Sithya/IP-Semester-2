<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories() {
        return Category::all();  // Fetch all categories
    }

    public function createCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $category = Category::create($validatedData);
    
        return response()->json(["message" => "Category created successfully", "category" => $category], 201);
    }
    

    public function getCategory($categoryId) {
        return Category::findOrFail($categoryId);
    }

    public function updateCategory(Request $request, $categoryId) {
        $category = Category::findOrFail($categoryId);
        $category->update(['name' => $request->name]);
        return $category;
    }

    public function deleteCategory($categoryId) {
        return Category::destroy($categoryId);
    }
}
