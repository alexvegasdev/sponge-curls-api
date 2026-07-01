<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return response()->json($categories, 200);
    }

    function show(Category $category)
    {
        $category = Category::findOrFail($category->id);
        return response()->json($category, 200);
    }

    function store(Request $request)
    {
        $request->validate(
            ['name' => 'required|string|unique:categories,name'],
            ['description' => 'nullable|string']
        );

        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json($category, 201);
    }

    function update(Request $request, Category $category)
    {
        $request->validate(
            ['name' => 'required|string|unique:categories,name,' . $category->id],
            ['description' => 'nullable|string']
        );

        $category->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json($category, 200);
    }

    function destroy(Category $category)
    {
        $category = Category::findOrFail($category->id);
            $category->delete();
            return response()->json(["success"=>"Deleted category"],200);
    }

}
