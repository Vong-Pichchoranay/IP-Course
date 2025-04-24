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
     public function createProduct(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->pricing = $request->pricing;
        $product->save();
        return $product;    
    }

    // --- Get /api/products/{productId}
    public function getProduct($productId) {
        $product = Product::find($productId);
        return $product;   
    }    

    // get('/categories/{categoryId}/','getProductsByCategory'
    public function getProductsByCategory($categoryId) {
        return Product::where('category_id', $categoryId)->get();
    }
    
    // --- Patch /api/products/{productId}
    public function updateProduct(Request $request, $productId) {
        $product = Product::find($productId);
        $product->name = $request->name;
        $product->save();
        return $product;
    }
    
    // --- Delete /api/products/{productId}
    public function deleteProduct($productId) {
        $product = Product::find($productId);
        $product->delete();
        return $product;
    }
}
