<?php

use Illuminate\Database\Seeder;

class OauthPersonalAccessClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oauth_personal_access_clients = array(
            array('id' => '1','client_id' => '1','created_at' => '2019-07-13 11:47:34','updated_at' => '2019-07-13 11:47:34')
          );

          foreach($oauth_personal_access_clients as $key => $oauth_personal_access_client){
            DB::table('oauth_personal_access_clients')->insert([$oauth_personal_access_client]); 
          }

    }
}
