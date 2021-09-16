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
            array('id' => '4','user_id' => '8','created_at' => '2019-08-01 16:05:09','updated_at' => '2019-08-01 16:05:09'),
            array('id' => '5','user_id' => '10','created_at' => '2021-06-23 08:31:30','updated_at' => '2021-06-23 08:31:30'),
            array('id' => '10','user_id' => '15','created_at' => '2021-09-04 04:56:23','updated_at' => '2021-09-04 04:56:23'),
            array('id' => '14','user_id' => '19','created_at' => '2021-09-07 09:05:46','updated_at' => '2021-09-07 09:05:46'),
            array('id' => '16','user_id' => '21','created_at' => '2021-09-11 04:16:19','updated_at' => '2021-09-11 04:16:19')
          );

        foreach($customers as $key => $customer){
            DB::table('customers')->insert([$customer]); 
        } 

    }
}
