<?php

namespace Tests\Feature;

use dokimi\User;
use Tests\TestCase;
use dokimi\Customer;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_logged_in_users_can_see_the_customers_list()
    {
        $response = $this->get('/customers')
            ->assertRedirect('/login');
    }


     /** @test */
     public function authenticated_users_can_see_the_customer_list()
     {
         $response = $this->actingAs(factory(User::class)->create());

         $response = $this->get('/customers')
            ->assertOK();
     }


    /** @test */
    public function a_customer_can_be_added_through_the_form()
    {
        $this->withoutExceptionHandling();

        Event::fake();

        $response = $this->actingAs(factory(User::class)->create([
            'email' => 'rau.makenzie@example.com'
        ]));

        $response = $this->post('/customers', $this->data());

        $this->assertCount(1, Customer::all());
    }

    /** @test */
    public function a_name_is_required()
    {
        $this->withoutExceptionHandling();

        Event::fake();

        $response = $this->actingAs(factory(User::class)->create([
            'email' => 'rau.makenzie@example.com',
        ]));

        $response = $this->post('/customers', array_merge($this->data(), ['name' => '']));

        $response->assertSessionHasErrors('name');

        $this->assertCount(0, Customer::all());

        //dd(array_merge($this->data(), ['name' => '']));
    }

	private function data()
	{
		return [
            'name' => 'Test User',
            'email' => 'test@test.com',
            'status' => '1',
            'company_id' => '1',
        ];
    }


}
