<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            array('id' => '1','name' => 'Manager','permissions' => '["1","2","4"]','created_at' => '2018-10-10 10:09:47','updated_at' => '2018-10-10 10:21:37'),
            array('id' => '2','name' => 'Accountant','permissions' => '["2","3"]','created_at' => '2018-10-10 10:22:09','updated_at' => '2018-10-10 10:22:09')
        );
          
        
        foreach($roles as $key => $role){
            DB::table('roles')->insert([$role]); 
        }   

    }
}
