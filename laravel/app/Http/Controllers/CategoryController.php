<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // --- Get /api/categories
    public function getCategories(){
        return Category::all();
    }

    // --- Post /api/categories
    public function createCategory(){
        return ["message" => "Creating 1 new category"];
    }

    // --- Get /api/categories/{categoryId}
    public function getCategory($categoryId){
        $category = Category::find($categoryId);
        return $category;
    }

    // --- Patch /api/categories/{categoryId}
    public function updateCategory($categoryId){
        return ["message" => "Updating 1 category base on given categoryId"];
    }

    // --- Delete /api/categories/{categoryId}
    public function deleteCategory($categoryId){
        return ["message" => "Deleting 1 category base on given categoryId"];
    }
}
