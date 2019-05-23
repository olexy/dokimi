<?php

use dokimi\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer_1 = Customer::create([
            'name' => 'John Smith ',
            'email' => 'jsmith@fake.com',
            'status'=> 1
        ]);
        $customer_2 = Customer::create([
            'name' => 'Max Freigh',
            'email' => 'mfreigh@fake.com',
            'status' => 1
        ]);
        $customer_3 = Customer::create([
            'name' => 'Jane Doe',
            'email' => 'jdoe@fake.com',
            'status'=> 1
        ]);
        $customer_4 = Customer::create([
            'name' => 'Ray Lewis',
            'email' => 'rlewis@fake.com',
            'status'=> 1
        ]);
        $customer_5 = Customer::create([
            'name' => 'Joseph Stegner',
            'email' => 'jstegner@fake.com',
            'status'=> 1
        ]);
        $customer_6 = Customer::create([
            'name' => 'Tom Ghalare',
            'email' => 'tghalare@fake.com',
            'status'=> 1
        ]);
        $customer_7 = Customer::create([
            'name' => 'Masha Rastova',
            'email' => 'mrastova@fake.com',
            'status'=> 0
        ]);
        $customer_8 = Customer::create([
            'name' => 'Raymon Reddington',
            'email' => 'rred@fake.com',
            'status'=> 0
        ]);
        $customer_9 = Customer::create([
            'name' => 'Tom Keen',
            'email' => 'tkeen@fake.com',
            'status'=> 0
        ]);
        $customer_10 = Customer::create([
            'name' => 'Harold Cooper',
            'email' => 'hcooper@fake.com',
            'status'=> 0
        ]);

    }
}
