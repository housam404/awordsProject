<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
{
    $categories = Category::all()->map(function($category){
        $category->icon = $category->icon ? asset('storage/' . $category->icon) : null;
        return $category;
    });

    return response()->json($categories);
}
}