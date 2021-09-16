<?php

use Illuminate\Database\Seeder;

class SeoSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seo_settings = array(
            array('id' => '1','keyword' => 'bootstrap,responsive,template,developer','author' => 'Active IT Zone','revisit' => '11','sitemap_link' => 'https://www.activeitzone.com','description' => 'Active E-commerce CMS Multi vendor system is such a platform to build a border less marketplace both for physical and digital goods.','created_at' => '2019-08-08 14:26:11','updated_at' => '2019-08-08 08:26:11')
        );

        foreach($seo_settings as $key => $seo){
            DB::table('seo_settings')->insert([$seo]); 
        }  
          
    }
}
