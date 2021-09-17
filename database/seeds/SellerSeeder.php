<?php

use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sellers = array(            
            array('id' => '1','user_id' => '2','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-09-08 11:20:17','updated_at' => '2021-09-13 12:17:23')
          );

        foreach($sellers as $key => $seller){
            DB::table('sellers')->insert([$seller]); 
        }
    }
}
