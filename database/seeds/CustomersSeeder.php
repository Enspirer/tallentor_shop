<?php

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = array(
            array('id' => '1','user_id' => '3','created_at' => '2021-09-11 04:16:19','updated_at' => '2021-09-11 04:16:19')
          );

        foreach($customers as $key => $customer){
            DB::table('customers')->insert([$customer]); 
        } 

    }
}
