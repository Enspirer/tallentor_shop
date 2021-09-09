<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('author_id')->nullable();
            $table->text('book_title')->nullable();
            $table->text('book_description')->nullable();
            $table->text('book_image')->nullable();
            $table->text('search_store_link')->nullable();
            $table->text('status')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('my_books');
    }
}
