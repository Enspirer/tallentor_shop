<?php

use Illuminate\Database\Seeder;

class AppSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_settings')
        ->insert(
            [ 
            'name' => 'Active eCommerce',
            'logo' => 'uploads/logo/matggar.png',
            'currency_id' => 1,
            'currency_format' => 'symbol',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'youtube' => 'https://youtube.com',
            'google_plus' => 'https://google.com',
            ]
        ); 
    }
}
