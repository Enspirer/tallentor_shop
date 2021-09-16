<?php

use Illuminate\Database\Seeder;

class BusinessSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $business_settings = array(
            array('id' => '1','type' => 'home_default_currency','value' => '1','created_at' => '2018-10-16 07:05:52','updated_at' => '2019-01-28 06:56:53'),
            array('id' => '2','type' => 'system_default_currency','value' => '1','created_at' => '2018-10-16 07:06:58','updated_at' => '2020-01-26 09:52:13'),
            array('id' => '3','type' => 'currency_format','value' => '1','created_at' => '2018-10-17 08:31:59','updated_at' => '2018-10-17 08:31:59'),
            array('id' => '4','type' => 'symbol_format','value' => '1','created_at' => '2018-10-17 08:31:59','updated_at' => '2019-01-20 07:40:55'),
            array('id' => '5','type' => 'no_of_decimals','value' => '3','created_at' => '2018-10-17 08:31:59','updated_at' => '2020-03-04 06:27:16'),
            array('id' => '6','type' => 'product_activation','value' => '1','created_at' => '2018-10-28 07:08:37','updated_at' => '2019-02-04 06:41:41'),
            array('id' => '7','type' => 'vendor_system_activation','value' => '1','created_at' => '2018-10-28 13:14:16','updated_at' => '2019-02-04 06:41:38'),
            array('id' => '8','type' => 'show_vendors','value' => '1','created_at' => '2018-10-28 13:14:47','updated_at' => '2019-02-04 06:41:13'),
            array('id' => '9','type' => 'paypal_payment','value' => '0','created_at' => '2018-10-28 13:15:16','updated_at' => '2019-01-31 10:39:10'),
            array('id' => '10','type' => 'stripe_payment','value' => '0','created_at' => '2018-10-28 13:15:47','updated_at' => '2018-11-14 07:21:51'),
            array('id' => '11','type' => 'cash_payment','value' => '1','created_at' => '2018-10-28 13:16:05','updated_at' => '2019-01-24 09:10:18'),
            array('id' => '12','type' => 'payumoney_payment','value' => '0','created_at' => '2018-10-28 13:16:27','updated_at' => '2019-03-05 11:11:36'),
            array('id' => '13','type' => 'best_selling','value' => '1','created_at' => '2018-12-24 13:43:44','updated_at' => '2019-02-14 10:59:13'),
            array('id' => '14','type' => 'paypal_sandbox','value' => '0','created_at' => '2019-01-16 18:14:18','updated_at' => '2019-01-16 18:14:18'),
            array('id' => '15','type' => 'sslcommerz_sandbox','value' => '1','created_at' => '2019-01-16 18:14:18','updated_at' => '2019-03-14 05:37:26'),
            array('id' => '16','type' => 'sslcommerz_payment','value' => '0','created_at' => '2019-01-24 15:09:07','updated_at' => '2019-01-29 11:43:46'),
            array('id' => '17','type' => 'vendor_commission','value' => '20','created_at' => '2019-01-31 11:48:04','updated_at' => '2019-04-13 12:19:26'),
            array('id' => '18','type' => 'verification_form','value' => '[{"type":"text","label":"Your name"},{"type":"text","label":"Shop name"},{"type":"text","label":"Email"},{"type":"text","label":"License No"},{"type":"text","label":"Full Address"},{"type":"text","label":"Phone Number"},{"type":"file","label":"Tax Papers"}]','created_at' => '2019-02-03 17:06:58','updated_at' => '2019-02-16 11:44:42'),
            array('id' => '19','type' => 'google_analytics','value' => '0','created_at' => '2019-02-06 17:52:35','updated_at' => '2019-02-06 17:52:35'),
            array('id' => '20','type' => 'facebook_login','value' => '0','created_at' => '2019-02-07 18:21:59','updated_at' => '2019-02-09 01:11:15'),
            array('id' => '21','type' => 'google_login','value' => '0','created_at' => '2019-02-07 18:22:10','updated_at' => '2019-02-09 01:11:14'),
            array('id' => '22','type' => 'twitter_login','value' => '0','created_at' => '2019-02-07 18:22:20','updated_at' => '2019-02-08 08:02:56'),
            array('id' => '23','type' => 'payumoney_payment','value' => '1','created_at' => '2019-03-05 17:08:17','updated_at' => '2019-03-05 17:08:17'),
            array('id' => '24','type' => 'payumoney_sandbox','value' => '1','created_at' => '2019-03-05 17:08:17','updated_at' => '2019-03-05 11:09:18'),
            array('id' => '36','type' => 'facebook_chat','value' => '0','created_at' => '2019-04-15 17:15:04','updated_at' => '2019-04-15 17:15:04'),
            array('id' => '37','type' => 'email_verification','value' => '0','created_at' => '2019-04-30 13:00:07','updated_at' => '2019-04-30 13:00:07'),
            array('id' => '38','type' => 'wallet_system','value' => '0','created_at' => '2019-05-19 13:35:44','updated_at' => '2019-05-19 07:41:57'),
            array('id' => '39','type' => 'coupon_system','value' => '0','created_at' => '2019-06-11 15:16:18','updated_at' => '2019-06-11 15:16:18'),
            array('id' => '40','type' => 'current_version','value' => '4.8','created_at' => '2019-06-11 15:16:18','updated_at' => '2019-06-11 15:16:18'),
            array('id' => '41','type' => 'instamojo_payment','value' => '0','created_at' => '2019-07-06 15:28:03','updated_at' => '2019-07-06 15:28:03'),
            array('id' => '42','type' => 'instamojo_sandbox','value' => '1','created_at' => '2019-07-06 15:28:43','updated_at' => '2019-07-06 15:28:43'),
            array('id' => '43','type' => 'razorpay','value' => '0','created_at' => '2019-07-06 15:28:43','updated_at' => '2019-07-06 15:28:43'),
            array('id' => '44','type' => 'paystack','value' => '0','created_at' => '2019-07-21 18:30:38','updated_at' => '2019-07-21 18:30:38'),
            array('id' => '45','type' => 'pickup_point','value' => '0','created_at' => '2019-10-17 17:20:39','updated_at' => '2019-10-17 17:20:39'),
            array('id' => '46','type' => 'maintenance_mode','value' => '0','created_at' => '2019-10-17 17:21:04','updated_at' => '2019-10-17 17:21:04'),
            array('id' => '47','type' => 'voguepay','value' => '0','created_at' => '2019-10-17 17:21:24','updated_at' => '2019-10-17 17:21:24'),
            array('id' => '48','type' => 'voguepay_sandbox','value' => '0','created_at' => '2019-10-17 17:21:38','updated_at' => '2019-10-17 17:21:38'),
            array('id' => '50','type' => 'category_wise_commission','value' => '0','created_at' => '2020-01-21 12:52:47','updated_at' => '2020-01-21 12:52:47'),
            array('id' => '51','type' => 'conversation_system','value' => '1','created_at' => '2020-01-21 12:53:21','updated_at' => '2020-01-21 12:53:21'),
            array('id' => '52','type' => 'guest_checkout_active','value' => '1','created_at' => '2020-01-22 13:06:38','updated_at' => '2020-01-22 13:06:38'),
            array('id' => '53','type' => 'facebook_pixel','value' => '0','created_at' => '2020-01-22 17:13:58','updated_at' => '2020-01-22 17:13:58'),
            array('id' => '55','type' => 'classified_product','value' => '0','created_at' => '2020-05-13 18:31:05','updated_at' => '2020-05-13 18:31:05'),
            array('id' => '56','type' => 'pos_activation_for_seller','value' => '1','created_at' => '2020-06-11 15:15:02','updated_at' => '2020-06-11 15:15:02'),
            array('id' => '57','type' => 'shipping_type','value' => 'product_wise_shipping','created_at' => '2020-07-01 19:19:56','updated_at' => '2020-07-01 19:19:56'),
            array('id' => '58','type' => 'flat_rate_shipping_cost','value' => '0','created_at' => '2020-07-01 19:19:56','updated_at' => '2020-07-01 19:19:56'),
            array('id' => '59','type' => 'shipping_cost_admin','value' => '0','created_at' => '2020-07-01 19:19:56','updated_at' => '2020-07-01 19:19:56'),
            array('id' => '60','type' => 'payhere_sandbox','value' => '0','created_at' => '2020-07-30 23:53:53','updated_at' => '2020-07-30 23:53:53'),
            array('id' => '61','type' => 'payhere','value' => '0','created_at' => '2020-07-30 23:53:53','updated_at' => '2020-07-30 23:53:53'),
            array('id' => '62','type' => 'google_recaptcha','value' => '0','created_at' => '2020-08-17 12:43:37','updated_at' => '2020-08-17 12:43:37'),
            array('id' => '63','type' => 'ngenius','value' => '0','created_at' => '2020-09-22 16:28:21','updated_at' => '2020-09-22 16:28:21'),
            array('id' => '64','type' => 'header_logo','value' => '15','created_at' => '2020-11-16 12:56:36','updated_at' => '2021-07-30 09:22:32'),
            array('id' => '65','type' => 'show_language_switcher','value' => 'on','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '66','type' => 'show_currency_switcher','value' => 'on','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '67','type' => 'header_stikcy','value' => 'on','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '68','type' => 'footer_logo','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '69','type' => 'about_us_description','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '70','type' => 'contact_address','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '71','type' => 'contact_phone','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '72','type' => 'contact_email','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '73','type' => 'widget_one_labels','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '74','type' => 'widget_one_links','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '75','type' => 'widget_one','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '76','type' => 'frontend_copyright_text','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '77','type' => 'show_social_links','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '78','type' => 'facebook_link','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '79','type' => 'twitter_link','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '80','type' => 'instagram_link','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '81','type' => 'youtube_link','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '82','type' => 'linkedin_link','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '83','type' => 'payment_method_images','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '84','type' => 'home_slider_images','value' => '["9","10"]','created_at' => '2020-11-16 12:56:36','updated_at' => '2021-07-08 08:51:53'),
            array('id' => '85','type' => 'home_slider_links','value' => '[null,null]','created_at' => '2020-11-16 12:56:36','updated_at' => '2021-07-08 08:51:53'),
            array('id' => '86','type' => 'home_banner1_images','value' => '[]','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '87','type' => 'home_banner1_links','value' => '[]','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '88','type' => 'home_banner2_images','value' => '[]','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '89','type' => 'home_banner2_links','value' => '[]','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '90','type' => 'home_categories','value' => '[]','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '91','type' => 'top10_categories','value' => '[]','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '92','type' => 'top10_brands','value' => '[]','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '93','type' => 'website_name','value' => 'Tallentor Shop','created_at' => '2020-11-16 12:56:36','updated_at' => '2021-06-23 09:09:49'),
            array('id' => '94','type' => 'site_motto','value' => 'Sri Lanka Largest Online Marketplace','created_at' => '2020-11-16 12:56:36','updated_at' => '2021-06-23 09:10:22'),
            array('id' => '95','type' => 'site_icon','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '96','type' => 'base_color','value' => '#e62e04','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '97','type' => 'base_hov_color','value' => '#e62e04','created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '98','type' => 'meta_title','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '99','type' => 'meta_description','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '100','type' => 'meta_keywords','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '101','type' => 'meta_image','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '102','type' => 'site_name','value' => 'Tallentor Shop','created_at' => '2020-11-16 12:56:36','updated_at' => '2021-06-23 09:05:17'),
            array('id' => '103','type' => 'system_logo_white','value' => '11','created_at' => '2020-11-16 12:56:36','updated_at' => '2021-07-08 09:59:35'),
            array('id' => '104','type' => 'system_logo_black','value' => '11','created_at' => '2020-11-16 12:56:36','updated_at' => '2021-07-08 09:59:48'),
            array('id' => '105','type' => 'timezone','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '106','type' => 'admin_login_background','value' => NULL,'created_at' => '2020-11-16 12:56:36','updated_at' => '2020-11-16 12:56:36'),
            array('id' => '107','type' => 'iyzico_sandbox','value' => '1','created_at' => '2020-12-30 22:15:56','updated_at' => '2020-12-30 22:15:56'),
            array('id' => '108','type' => 'iyzico','value' => '1','created_at' => '2020-12-30 22:15:56','updated_at' => '2020-12-30 22:15:56'),
            array('id' => '109','type' => 'decimal_separator','value' => '1','created_at' => '2020-12-30 22:15:56','updated_at' => '2020-12-30 22:15:56'),
            array('id' => '110','type' => 'nagad','value' => '0','created_at' => '2021-01-22 16:00:03','updated_at' => '2021-01-22 16:00:03'),
            array('id' => '111','type' => 'bkash','value' => '0','created_at' => '2021-01-22 16:00:03','updated_at' => '2021-01-22 16:00:03'),
            array('id' => '112','type' => 'bkash_sandbox','value' => '1','created_at' => '2021-01-22 16:00:03','updated_at' => '2021-01-22 16:00:03'),
            array('id' => '113','type' => 'header_menu_labels','value' => '["Home","Flash Sale","Blogs","All Brands","All Categories"]','created_at' => '2021-02-16 08:13:11','updated_at' => '2021-02-16 08:22:18'),
            array('id' => '114','type' => 'header_menu_links','value' => '["http:\\/\\/domain.com","http:\\/\\/domain.com\\/flash-deals","http:\\/\\/domain.com\\/blog","http:\\/\\/domain.com\\/brands","http:\\/\\/domain.com\\/categories"]','created_at' => '2021-02-16 08:13:11','updated_at' => '2021-02-18 06:50:04'),
            array('id' => '115','type' => 'proxypay','value' => '1','created_at' => '2021-06-20 16:55:42','updated_at' => '2021-06-20 16:55:42'),
            array('id' => '116','type' => 'proxypay_sandbox','value' => '1','created_at' => '2021-06-20 16:55:42','updated_at' => '2021-06-20 16:55:42'),
            array('id' => '117','type' => 'topbar_banner','value' => NULL,'created_at' => '2021-06-23 09:19:09','updated_at' => '2021-06-23 09:19:33'),
            array('id' => '118','type' => 'topbar_banner_link','value' => NULL,'created_at' => '2021-06-23 09:19:09','updated_at' => '2021-06-23 09:19:09')
          );

        foreach($business_settings as $key => $business){
            DB::table('business_settings')->insert([$business]); 
        } 

    }
}