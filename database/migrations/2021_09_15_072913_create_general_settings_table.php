<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('frontend_color')->default('default');
            $table->text('logo')->nullable();
            $table->text('footer_logo')->nullable();
            $table->text('admin_logo')->nullable();
            $table->text('admin_login_background')->nullable();
            $table->text('admin_login_sidebar')->nullable();
            $table->text('favicon')->nullable();
            $table->text('site_name')->nullable();
            $table->text('address')->nullable();
            $table->text('description');
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();
            $table->text('google_plus')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
