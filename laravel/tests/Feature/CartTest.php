<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartTest extends TestCase
{
    /**
     * Test ID: Cart-001
     * Description: Check relationship if a cart belongs to a customer
     * Precondition: Create a category, a product, a customer, and a cart in database
     * Test Steps: 1. Check if customer of the cart is an instance of Customer entity
     * Test Data: None
     * Expected Result: The assertion should return true
     * Actual Result: The assertion is true
     * Status: Passed
     * Remark: None
     */
    public function test_if_cart_belongs_to_a_customer(): void
    {
        $category = Category::factory()->create([ 'name' => 'Veggies' ]);

        $product_data = [
            'name' => 'Cabbage', 
            'category_id' => $category->id,
            'pricing' => 3, 
            'description' => "lorem ipsum here"
        ];
        $product = Product::factory()->create($product_data);
        
        $customer_data = [
            'name' => 'John',
            'email' => 'john@gmail.com',
            'address' => 'Washington, USA',
            'phone' => '123456789'
        ];
        $customer = Customer::factory()->create($customer_data);

        $cart_data = [
            'quantity' => 3,
            'product_id' => $product->id,
            'customer_id' => $customer->id
        ];
        $cart = Cart::factory()->create($cart_data);

        $this->assertInstanceOf(Customer::class, $cart->customer);
        $this->assertEquals($customer->id, $cart->customer->id);
    }
}
