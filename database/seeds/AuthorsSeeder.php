<?php

use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = array(            
            array('id' => '1','author_name' => 'Test Author','author_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','user_id' => '2','profile_picture' => '1','cover_photo' => '2','slug' => 'test-author-6500203526766C1','facebook_link' => '','twitter_link' => '','follow_count' => '0','created_at' => '2021-09-08 11:17:56','updated_at' => '2021-09-14 09:45:21','contact_number' => '0732345678','email' => 'author@author.com','status' => 'Approved')
          );

          foreach($authors as $key => $author){
            DB::table('authors')->insert([$author]); 
        } 
          
    }
}
