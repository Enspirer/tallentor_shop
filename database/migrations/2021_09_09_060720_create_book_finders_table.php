<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookFindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_finders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('book_name')->nullable();
            $table->text('author_name')->nullable();
            $table->text('user_id')->nullable();
            $table->text('publisher_name')->nullable();
            $table->text('book_type')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('book_finders');
    }
}
