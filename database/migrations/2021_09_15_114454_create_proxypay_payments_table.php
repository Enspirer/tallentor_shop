<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProxypayPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proxypay_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('payment_type');
            $table->text('reference_id');
            $table->integer('order_id')->nullable();
            $table->integer('package_id')->nullable();
            $table->integer('user_id');
            $table->double('amount',25,2)->default(0.00);
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
        Schema::dropIfExists('proxypay_payments');
    }
}
