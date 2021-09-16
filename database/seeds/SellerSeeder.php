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
            array('id' => '1','user_id' => '3','verification_status' => '1','verification_info' => '[{"type":"text","label":"Name","value":"Mr. Seller"},{"type":"select","label":"Marital Status","value":"Married"},{"type":"multi_select","label":"Company","value":"[\\"Company\\"]"},{"type":"select","label":"Gender","value":"Male"},{"type":"file","label":"Image","value":"uploads\\/verification_form\\/CRWqFifcbKqibNzllBhEyUSkV6m1viknGXMEhtiW.png"}]','cash_on_delivery_status' => '1','admin_to_pay' => '78.40','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2018-10-07 10:12:57','updated_at' => '2020-01-26 09:51:11'),
            array('id' => '2','user_id' => '11','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-07-08 07:09:33','updated_at' => '2021-07-08 07:22:57'),
            array('id' => '3','user_id' => '12','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-07-08 12:20:38','updated_at' => '2021-09-13 12:17:32'),
            array('id' => '4','user_id' => '13','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-09-03 11:50:27','updated_at' => '2021-09-13 12:17:32'),
            array('id' => '5','user_id' => '14','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-09-04 04:04:39','updated_at' => '2021-09-13 12:17:31'),
            array('id' => '6','user_id' => '16','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-09-06 03:11:28','updated_at' => '2021-09-13 12:17:31'),
            array('id' => '7','user_id' => '17','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-09-06 09:27:23','updated_at' => '2021-09-13 12:17:30'),
            array('id' => '8','user_id' => '18','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-09-07 06:20:16','updated_at' => '2021-09-13 12:17:29'),
            array('id' => '9','user_id' => '20','verification_status' => '1','verification_info' => NULL,'cash_on_delivery_status' => '0','admin_to_pay' => '0.00','bank_name' => NULL,'bank_acc_name' => NULL,'bank_acc_no' => NULL,'bank_routing_no' => NULL,'bank_payment_status' => '0','created_at' => '2021-09-08 11:20:17','updated_at' => '2021-09-13 12:17:23')
          );

        foreach($sellers as $key => $seller){
            DB::table('sellers')->insert([$seller]); 
        }
    }
}
