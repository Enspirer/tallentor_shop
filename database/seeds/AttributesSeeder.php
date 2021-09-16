<?php

use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')
        ->insert(
            [ 
            'name' => 'Size'
            ]
        ); 
        DB::table('attributes')
        ->insert(
            [ 
            'name' => 'Fabric'
            ]
        ); 
    }
}
