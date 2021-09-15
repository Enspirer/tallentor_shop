<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('guest_id')->nullable();
            $table->integer('seller_id')->nullable();
            $table->text('shipping_address')->nullable();
            $table->text('delivery_status')->nullable()->default('pending');
            $table->text('payment_type')->nullable();
            $table->text('payment_status')->nullable()->default('unpaid');
            $table->text('payment_details')->nullable();
            $table->double('grand_total',20,2)->nullable();
            $table->double('coupon_discount',20,2)->default(0.00);
            $table->text('code')->nullable();
            $table->integer('date');
            $table->integer('viewed')->default(0);
            $table->integer('delivery_viewed')->default(1);
            $table->integer('payment_status_viewed')->nullable()->default(1);
            $table->integer('commission_calculated')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
