<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('referred_by')->nullable();
            $table->text('provider_id')->nullable();
            $table->string('user_type')->default('customer');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('verification_code')->nullable();
            $table->text('new_email_verificiation_code')->nullable();
            $table->string('password')->nullable();
            $table->text('remember_token')->nullable();
            $table->text('avatar')->nullable();
            $table->text('avatar_original')->nullable();
            $table->text('address')->nullable();
            $table->text('country')->nullable();
            $table->text('city')->nullable();
            $table->text('postal_code')->nullable();
            $table->text('phone')->nullable();
            $table->double('balance',20,2)->default(0.00);            
            $table->integer('banned')->default(0);
            $table->text('referral_code')->nullable();
            $table->integer('customer_package_id')->nullable();
            $table->integer('remaining_uploads')->default(0)->nullable();
            $table->text('is_author')->nullable();
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
        Schema::dropIfExists('users');
    }
}
