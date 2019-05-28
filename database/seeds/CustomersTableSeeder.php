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
        factory(Customer::class, 5)->create();

        // $company_1 = Company::create([
        //     'name' => 'Cyberoptions Inc',
        //     'phone' => '800 234 5678'
        // ]);

        // $company_2 = Company::create([
        //     'name' => 'ABC Bakerys Inc',
        //     'phone' => '800 234 5678'
        // ]);

        // $company_3 = Company::create([
        //     'name' => 'Hanoval Hardware',
        //     'phone' => '800 234 5678'
        // ]);

        // $company_4 = Company::create([
        //     'name' => 'Juniper Networks',
        //     'phone' => '800 234 5678'
        // ]);

        // //CUSTOMER SEED
        // $customer_1 = Customer::create([
        //     'company_id' => $company_1->id,
        //     'name' => 'John Smith ',
        //     'email' => 'jsmith@fake.com',
        //     'status'=> 1
        // ]);
        // $customer_2 = Customer::create([
        //     'company_id' => $company_2->id,
        //     'name' => 'Max Freigh',
        //     'email' => 'mfreigh@fake.com',
        //     'status' => 1
        // ]);
        // $customer_3 = Customer::create([
        //     'company_id' => $company_3->id,
        //     'name' => 'Jane Doe',
        //     'email' => 'jdoe@fake.com',
        //     'status'=> 1
        // ]);
        // $customer_4 = Customer::create([
        //     'company_id' => $company_1->id,
        //     'name' => 'Ray Lewis',
        //     'email' => 'rlewis@fake.com',
        //     'status'=> 1
        // ]);
        // $customer_5 = Customer::create([
        //     'company_id' => $company_2->id,
        //     'name' => 'Joseph Stegner',
        //     'email' => 'jstegner@fake.com',
        //     'status'=> 1
        // ]);
        // $customer_6 = Customer::create([
        //     'company_id' => $company_1,
        //     'name' => 'Tom Ghalare',
        //     'email' => 'tghalare@fake.com',
        //     'status'=> 1
        // ]);
        // $customer_7 = Customer::create([
        //     'company_id' => $company_3->id,
        //     'name' => 'Masha Rastova',
        //     'email' => 'mrastova@fake.com',
        //     'status'=> 0
        // ]);
        // $customer_8 = Customer::create([
        //     'company_id' => $company_4->id,
        //     'name' => 'Raymon Reddington',
        //     'email' => 'rred@fake.com',
        //     'status'=> 0
        // ]);
        // $customer_9 = Customer::create([
        //     'company_id' => $company_4->id,
        //     'name' => 'Tom Keen',
        //     'email' => 'tkeen@fake.com',
        //     'status'=> 0
        // ]);
        // $customer_10 = Customer::create([
        //     'company_id' => $company_1->id,
        //     'name' => 'Harold Cooper',
        //     'email' => 'hcooper@fake.com',
        //     'status'=> 0
        // ]);




    }
}
