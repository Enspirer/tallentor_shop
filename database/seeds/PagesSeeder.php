<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $pages = array(
            array('id' => '1','type' => 'home_page','title' => 'Home Page','slug' => 'home','content' => NULL,'meta_title' => NULL,'meta_description' => NULL,'keywords' => NULL,'meta_image' => NULL,'created_at' => '2020-11-04 15:43:20','updated_at' => '2020-11-04 15:43:20'),
            array('id' => '2','type' => 'seller_policy_page','title' => 'Seller Policy Pages','slug' => 'sellerpolicy','content' => NULL,'meta_title' => NULL,'meta_description' => NULL,'keywords' => NULL,'meta_image' => NULL,'created_at' => '2020-11-04 15:44:41','updated_at' => '2020-11-04 17:49:30'),
            array('id' => '3','type' => 'return_policy_page','title' => 'Return Policy Page','slug' => 'returnpolicy','content' => NULL,'meta_title' => NULL,'meta_description' => NULL,'keywords' => NULL,'meta_image' => NULL,'created_at' => '2020-11-04 15:44:41','updated_at' => '2020-11-04 15:44:41'),
            array('id' => '4','type' => 'support_policy_page','title' => 'Support Policy Page','slug' => 'supportpolicy','content' => NULL,'meta_title' => NULL,'meta_description' => NULL,'keywords' => NULL,'meta_image' => NULL,'created_at' => '2020-11-04 15:44:59','updated_at' => '2020-11-04 15:44:59'),
            array('id' => '5','type' => 'terms_conditions_page','title' => 'Term Conditions Page','slug' => 'terms','content' => NULL,'meta_title' => NULL,'meta_description' => NULL,'keywords' => NULL,'meta_image' => NULL,'created_at' => '2020-11-04 15:45:29','updated_at' => '2020-11-04 15:45:29'),
            array('id' => '6','type' => 'privacy_policy_page','title' => 'Privacy Policy Page','slug' => 'privacypolicy','content' => NULL,'meta_title' => NULL,'meta_description' => NULL,'keywords' => NULL,'meta_image' => NULL,'created_at' => '2020-11-04 15:45:55','updated_at' => '2020-11-04 15:45:55')
          );

        foreach($pages as $key => $page){
          DB::table('pages')->insert([$page]); 
        }

    }
}
