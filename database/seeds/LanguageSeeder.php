<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')
        ->insert(
            [ 
            'name' => 'English',
            'code' => 'en',
            'rtl' => 0,
            ]
        ); 
        DB::table('languages')
        ->insert(
            [ 
            'name' => 'Sinhala (සිංහල)',
            'code' => 'lk',
            'rtl' => 0,
            ]
        ); 

    }
}
