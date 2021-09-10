<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyWritingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_writings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('user_id');
            $table->text('author_id');
            $table->text('title');
            $table->text('post');
            $table->text('status');
            $table->text('discount')->nullable();
            $table->text('feature_image')->nullable();
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
        Schema::dropIfExists('my_writings');
    }
}
