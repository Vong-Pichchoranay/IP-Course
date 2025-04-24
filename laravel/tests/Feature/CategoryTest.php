<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test ID: Category-001
     * Description: Check if we can access the get all categories
     * Precondition: None
     * Test Steps: 1. Hit the get all categories api
     *             2. Check if the response status is 200
     * Test Data: None
     * Expected Result: The response status should be 200
     * Actual Result: The response status is 200
     * Status: Passed
     * Remark: None
     */
    public function test_if_we_can_get_all_categories_api(): void
    {
        $response = $this->get('/api/categories');

        $response->assertStatus(200);
    }


    /**
     * Test ID: Category-002
     * Description: Check if a new category can be created
     * Precondition: Ready sample category data for test
     * Test Steps: 1. Hit the post categories api
     *             2. Check if the response status is 201, and check if database has this data entry.
     * Test Data: [ 'name' => 'Veggies' ]
     * Expected Result: The response status should be 201. Database should have entry [ 'name' => 'Veggies' ]
     * Actual Result: The response status is 201. Database has entry [ 'name' => 'Veggies' ]
     * Status: Passed
     * Remark: None
     */
    public function test_category_post_api(){

        $data = [ 'name' => 'Veggies' ];

        $response = $this->postJson('/api/categories', $data);

        $response->assertStatus(201)
                 ->assertJson($data)
                 ->assertRedirect('/');
        $this->assertDatabaseHas('categories', [ 'name' => 'Veggies' ]);
    }


    /**
     * Test ID: Category-003
     * Description: Check if a new category has invalid input
     * Precondition: Ready sample category data for test
     * Test Steps: 1. Hit the post categories api
     *             2. Check if the response has validation error
     * Test Data: [ 'name' => 2 ]
     * Expected Result: The response should have validation error
     * Actual Result: The response has validation error on 'name' attribute, which should be string, not a number.
     * Status: Passed
     * Remark: None
     */
    public function test_category_post_has_invalid_input() {
        $response = $this->postJson('/api/categories', [ 'name' => 2 ]);

        // use for api tests
        $response->assertJsonValidationErrors(['name']);
    }


    /**
     * Test ID: Category-004
     * Description: Check if a category can be deleted
     * Precondition: Create sample category data in database
     * Test Steps: 1. Hit the delete categories api
     *             2. Check if the response status is 200
     *             3. Check if database is missing the category data
     * Test Data: None
     * Expected Result: The response status should be 200, and database should return true for missing category data
     * Actual Result: The response status is 200, and database does not have category data.
     * Status: Passed
     * Remark: None
     */
    public function test__category_can_be_deleted () {
        $category = Category::factory()->create([ 'name' => 'Snacks' ]);

        $response = $this->deleteJson('/api/categories/' . $category->id);

        $response->assertStatus(200);
        // dump($response);

        $this->assertDatabaseMissing('categories', [ 'id' => $category->id ]);
    }

    
}
