<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('author_name');
            $table->text('author_description')->nullable();
            $table->text('user_id')->nullable();
            $table->text('profile_picture');
            $table->text('cover_photo')->nullable();
            $table->text('contact_number')->nullable();
            $table->text('email')->nullable();
            $table->text('status')->nullable();
            $table->text('slug');
            $table->text('facebook_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->integer('follow_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
