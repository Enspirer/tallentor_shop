<?php

use Illuminate\Database\Seeder;

class OauthClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oauth_clients = array(
            array('id' => '1','user_id' => NULL,'name' => 'Laravel Personal Access Client','secret' => 'eR2y7WUuem28ugHKppFpmss7jPyOHZsMkQwBo1Jj','redirect' => 'http://localhost','personal_access_client' => '1','password_client' => '0','revoked' => '0','created_at' => '2019-07-13 11:47:34','updated_at' => '2019-07-13 11:47:34'),
            array('id' => '2','user_id' => NULL,'name' => 'Laravel Password Grant Client','secret' => 'WLW2Ol0GozbaXEnx1NtXoweYPuKEbjWdviaUgw77','redirect' => 'http://localhost','personal_access_client' => '0','password_client' => '1','revoked' => '0','created_at' => '2019-07-13 11:47:34','updated_at' => '2019-07-13 11:47:34')
          );

          foreach($oauth_clients as $key => $oauth){
            DB::table('oauth_clients')->insert([$oauth]); 
          }

    }
}
