<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // --- Get /api/products
    public function getProducts(){
        $products = Product::all();
        return $products;
    }

    // --- Post /api/products
    public function createProduct(){
        return ["message" => "Creating 1 new product"];
    }

    // --- Get /api/products/{productId}
    public function getProduct($productId){
        $product = Product::find($productId);
        return $product;
    }

    // --- Patch /api/categories/{productId}
    public function updateProduct($productId){
        return ["message" => "Updating 1 product base on given productId"];
    }

    // --- Delete /api/categories/{productId}
    public function deleteProduct($productId){
        return ["message" => "Deleting 1 product base on given productId"];
    }
}
