<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Request $request, Category $category)
    {
        $categories = Category::all();
        $products = Product::where('category_id', '=', $category->id)->get();
        return view('category')
                ->with(compact('products'))
                ->with(compact('categories'));
    }
}