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
            array('id' => '3','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Mr. Seller','email' => 'seller@example.com','email_verified_at' => '2018-12-11 23:30:00','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$eUKRlkmm2TAug75cfGQ4i.WoUbcJ2uVPqUlVkox.cv4CCyGEIMQEm','remember_token' => '1zoU4eQxnOC5yxRWLsTzMNBPpJuOvTk4g3GMUVYIrbGijiXHOfIlFq0wHrIn','avatar' => 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50','avatar_original' => NULL,'address' => 'Demo address','country' => 'US','city' => 'Demo city','postal_code' => '1234','phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => '3dLUoHsR1l','customer_package_id' => NULL,'remaining_uploads' => NULL,'created_at' => '2018-10-07 10:12:57','updated_at' => '2020-03-05 07:03:22','is_author' => NULL),
            array('id' => '8','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'customer','name' => 'Mr. Customer','email' => 'customer@example.com','email_verified_at' => '2018-12-11 23:30:00','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$eUKRlkmm2TAug75cfGQ4i.WoUbcJ2uVPqUlVkox.cv4CCyGEIMQEm','remember_token' => '9ndcz5o7xgnuxctJIbvUQcP41QKmgnWCc7JDSnWdHOvipOP2AijpamCNafEe','avatar' => 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50','avatar_original' => NULL,'address' => 'Demo address','country' => 'US','city' => 'Demo city','postal_code' => '1234','phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => '8zJTyXTlTT','customer_package_id' => NULL,'remaining_uploads' => NULL,'created_at' => '2018-10-07 10:12:57','updated_at' => '2020-03-03 09:56:11','is_author' => NULL),
            array('id' => '9','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'admin','name' => 'admin','email' => 'admin@admin.com','email_verified_at' => '2021-06-23 08:06:14','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$J98n3nBt1hXzGvrQizSEjuTDELjLvB3YANfBdintYJ6lcNO9wyM36','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-06-23 08:29:14','updated_at' => '2021-06-23 08:29:14','is_author' => NULL),
            array('id' => '10','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'customer','name' => 'Ruwan Malinga','email' => 'ruwan@yopmail.com','email_verified_at' => '2021-06-23 08:06:30','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$GvDgXwRULMGwmC0dYxumCumVF.RsPdvHIcRTTQcKI7MXtN.tu9S3i','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-06-23 08:31:30','updated_at' => '2021-06-23 08:31:30','is_author' => NULL),
            array('id' => '11','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Kasun Bandara','email' => 'kasun@yopmail.com','email_verified_at' => '2021-07-08 07:07:33','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$4ehI7CvKFqIdxoVRDZTPSO8kEkA2kXn9bZFlkQUHK6JxRuseZ4Kgy','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-07-08 07:08:52','updated_at' => '2021-07-08 07:09:33','is_author' => NULL),
            array('id' => '12','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Kashun Ramanayake','email' => 'md@enspirer.com','email_verified_at' => '2021-07-08 12:07:38','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$6U4zIdhcKWV8xqTWW1zpne9GJ9y60xliIlgJiN7UqvI2KEel9BZ8.','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-07-08 12:19:49','updated_at' => '2021-07-08 12:20:38','is_author' => '1'),
            array('id' => '13','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Heshan Hasaranga','email' => 'heshanhasaranga@yopmail.com','email_verified_at' => '2021-09-03 11:09:27','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$bVGUcFOsys5Lk4P3Y7aSVez8GukwX0r6.sWKEK/YJdjCGTdRv7S7u','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-03 11:49:54','updated_at' => '2021-09-03 11:50:27','is_author' => '1'),
            array('id' => '14','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Kumara Bandara','email' => 'kumareea@yopmail.com','email_verified_at' => '2021-09-04 04:09:39','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$KyG21GcsEWiJP8YwITJLqOwAH1bCEZFGrjzNU64CYvakpe0D/LgCS','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-04 04:04:16','updated_at' => '2021-09-04 04:04:39','is_author' => '0'),
            array('id' => '15','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'customer','name' => 'Apple Example','email' => 'appleexaple@yopmail.com','email_verified_at' => '2021-09-04 04:09:23','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$/u52TN6eOgEDEUHnbjOjnOUy9v69wgaR1PGSv3R2ISL7T/T6JXpAG','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-04 04:56:23','updated_at' => '2021-09-04 04:56:23','is_author' => NULL),
            array('id' => '16','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Amal Rathnayake','email' => 'amalrathnayake@yopmail.com','email_verified_at' => '2021-09-06 03:09:28','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$1ccnORb2rFVEJVzUiAFvKupqcygv06lOK2KsP69AKv4PlyJNGsIOK','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-06 03:02:46','updated_at' => '2021-09-06 03:11:28','is_author' => NULL),
            array('id' => '17','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Ruwantha Nirmal','email' => 'ruwantha@yopmail.com','email_verified_at' => '2021-09-06 09:09:23','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$AoVLZ13uIov2mO1KhTAAEO5nX7ROpFuei.KrZ8z1GdlmwrfAy9WyG','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-06 09:24:53','updated_at' => '2021-09-06 09:27:23','is_author' => NULL),
            array('id' => '18','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Ruwan Pathirana','email' => 'ruwanpathirana@yopmail.com','email_verified_at' => '2021-09-07 06:09:16','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$yx3lG.zb684lXpQMmnZpi.P4tiLGH7yiijcIaGmXz4I0vI29rqG12','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-07 04:03:35','updated_at' => '2021-09-07 06:20:16','is_author' => NULL),
            array('id' => '19','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'customer','name' => 'Ruwan Kumara','email' => 'ruwank@yopmail.com','email_verified_at' => '2021-09-07 09:09:46','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$i8mY68f02eMFlgVL9UBYXuplYx67O255V.rPN.nalwpOrqAmVv3ja','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-07 09:05:46','updated_at' => '2021-09-07 09:05:46','is_author' => NULL),
            array('id' => '20','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'seller','name' => 'Test Author','email' => 'author@ymail.com','email_verified_at' => '2021-09-08 11:09:17','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$4qjCS9BxLCGAuDltz.ktguCcmtIkCWIX.Yw5IeeO1HmSf/64gf.Km','remember_token' => 'JA7NhiYeVevUqm20WIPHp0GNgRHAwqhBmWAqPzVWETrOsVMvgIPLG79baa43','avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-08 11:16:01','updated_at' => '2021-09-08 11:20:17','is_author' => NULL),
            array('id' => '21','referred_by' => NULL,'provider_id' => NULL,'user_type' => 'customer','name' => 'Test User','email' => 'user@ymail.com','email_verified_at' => '2021-09-11 04:09:19','verification_code' => NULL,'new_email_verificiation_code' => NULL,'password' => '$2y$10$wecx6ICwYoSBShz1lNgrdu7jQ4GQMuCRmHjhRpqCYPom3b80vvbB2','remember_token' => NULL,'avatar' => NULL,'avatar_original' => NULL,'address' => NULL,'country' => NULL,'city' => NULL,'postal_code' => NULL,'phone' => NULL,'balance' => '0.00','banned' => '0','referral_code' => NULL,'customer_package_id' => NULL,'remaining_uploads' => '0','created_at' => '2021-09-11 04:16:19','updated_at' => '2021-09-11 04:16:19','is_author' => NULL)
          );

        foreach($users as $key => $user){
            DB::table('users')->insert([$user]); 
        } 

    }
}
