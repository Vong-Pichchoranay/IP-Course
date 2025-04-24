<?php

namespace Tests\Feature;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * Test ID: Product-001
     * Description: Check if we can access the get products api
     * Precondition: None
     * Test Steps: 1. Hit the get products api
     *             2. Check if the response status is 200
     *             3. Check the response structure if it matches what we expect
     * Test Data: None
     * Expected Result: The response status should be 200, and reponse structure should be as expected
     * Actual Result: The response status is 200, and response structure is as expected.
     * Status: Passed
     * Remark: None
     */
    public function test_api_returns_product_data(): void
    {
        $response = $this->getJson('/api/products');

        $response->assertStatus(200);
        $response->assertJsonStructure(['*' => ['id', 'name', 'category_id', 'pricing', 'description' ]]);
        // dump($response->json());
    }


    /**
     * Test ID: Product-002
     * Description: Check if we can get products by category
     * Precondition: Create a category and some products in database
     * Test Steps: 1. Enter category id of products
     *             2. Hit the get products by category api
     *             2. Check if the response status is 200
     * Test Data: None
     * Expected Result: The response status should be 200
     * Actual Result: The response status is 200
     * Status: Passed
     * Remark: None
     */
    public function test_api_returns_products_by_category() {
        $category = Category::factory()->create([ 'name' => 'Coffee' ]);

        $products = Product::factory()->count(3)->create([
            'name' => 'Espresso',
            'category_id' => $category->id,
            'pricing' => 2,
            'description' => 'lorem ipsum here'
        ]);

        $response = $this->getJson('/api/products/categories/' . $category->id);

        $response->assertOk();
    }

    /**
     * Test ID: Product-003
     * Description: Check if we can create new product
     * Precondition: Create a category in database
     * Test Steps: 1. Hit the post products api
     *             2. Check if the response status is 201
     * Test Data: None
     * Expected Result: The response status should be 201
     * Actual Result: The response status is 201
     * Status: Passed
     * Remark: None
     */
    public function test_api_create_new_product() {
        $category = Category::factory()->create([ 'name' => 'Tea' ]);

        $response = $this->postJson('/api/products', [ 'name'=>'Jasmine', 'category_id'=>$category->id, 'pricing'=>2 ]);

        $response->assertStatus(201);
    }


    /**
     * Test ID: Product-004
     * Description: Check relationship if a product has many carts
     * Precondition: Create a category, a customer, a product, and some carts in database
     * Test Steps: 1. Check if a product has n carts
     * Test Data: None
     * Expected Result: The assertion should return true
     * Actual Result: The assertion is true
     * Status: Passed
     * Remark: None
     */
    public function test_product_has_many_carts() {
        $category = Category::factory()->create([ 'name' => 'Veggies']);

        $customer = Customer::factory()->create([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'address' => 'Washington, USA',
            'phone' => '123456789'
        ]);

        $product = Product::factory()->create([
            'name' => 'Cabbage', 
            'category_id' => $category->id,
            'pricing' => 3, 
            'description' => "lorem ipsum here"
        ]);
        $carts = Cart::factory()->count(5)->create([
            'quantity' => 2,
            'product_id' => $product->id,
            'customer_id' => $customer->id
        ]);

        $this->assertCount(5, $product->carts);
    }


    /**
     * Test ID: Product-005
     * Description: Check if we can patch an existing product
     * Precondition: Create a category and a product in database, ready data to patch
     * Test Steps: 1. Enter data to patch
     *             2. Hit the patch product api
     *             3. Check if response status is 200
     *             4. Check if database has the updated entry
     *             5. 
     * Test Data: [ 'name' => 'Pork' ]
     * Expected Result: The response status should be 200/ok, and database should have updated entry
     * Actual Result: The response status is 200/ok, and database has the updated entry
     * Status: Passed
     * Remark: None
     */
    public function test_api_patch_product() {
        $category = Category::factory()->create([ 'name' => 'Meat']);

        $product = Product::factory()->create([
            'name' => 'Chicken', 
            'category_id' => $category->id,
            'pricing' => 3, 
            'description' => "lorem ipsum here"
        ]);

        $response = $this->patchJson('/api/products/' . $product->id, [ 'name' => 'Pork' ]);

        $response->assertOk();

        $this->assertDatabaseHas('products', [
            'name' => 'Pork', 
            'category_id' => $category->id,
            'pricing' => 3, 
            'description' => "lorem ipsum here"
        ]);

        // $response->assertJson([
        //     'name' => 'Pork', 
        //     'category_id' => $category->id,
        //     'pricing' => 3, 
        //     'description' => "lorem ipsum here"
        // ]);

        // $response->assertJsonFragment([ 'name' => 'Pork' ]);
        // $response->assertJsonStructure(['name', 'category_id', 'pricing', 'description']);
        // dump($response->json());

    }
}
