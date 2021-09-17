<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = array(
            array('id' => '1','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'admin','name' => 'Admin','email' => 'admin@admin.com','email_verified_at' => '2021-06-23 08:06:14','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$J98n3nBt1hXzGvrQizSEjuTDELjLvB3YANfBdintYJ6lcNO9wyM36','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-06-23 08:29:14','updated_at' => '2021-06-23 08:29:14','is_author' => NULL),
            array('id' => '2','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Test Author','email' => 'author@author.com','email_verified_at' => '2021-09-08 11:09:17','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$J98n3nBt1hXzGvrQizSEjuTDELjLvB3YANfBdintYJ6lcNO9wyM36','remember_token' => 'JA7NhiYeVevUqm20WIPHp0GNgRHAwqhBmWAqPzVWETrOsVMvgIPLG79baa43','avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-08 11:16:01','updated_at' => '2021-09-08 11:20:17','is_author' => NULL),
            array('id' => '3','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'customer','name' => 'Test User','email' => 'user@user.com','email_verified_at' => '2021-09-11 04:09:19','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$J98n3nBt1hXzGvrQizSEjuTDELjLvB3YANfBdintYJ6lcNO9wyM36','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-11 04:16:19','updated_at' => '2021-09-11 04:16:19','is_author' => NULL)
        );

        foreach($users as $key => $user){
            DB::table('users')->insert([$user]); 
        } 

    }
}
