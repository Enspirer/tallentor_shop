<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->index();
            $table->text('added_by')->default('admin');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('brand_id')->nullable();
            $table->text('photos')->nullable();
            $table->text('thumbnail_img')->nullable();
            $table->text('video_provider')->nullable();
            $table->text('video_link')->nullable();
            $table->text('tags')->index()->nullable();
            $table->text('description')->nullable();
            $table->double('unit_price',20,2);
            $table->double('purchase_price',20,2)->nullable();
            $table->integer('variant_product')->default(0);
            $table->text('attributes')->default('[]');
            $table->text('choice_options')->nullable();
            $table->text('colors')->nullable();
            $table->text('variations')->nullable();
            $table->integer('todays_deal')->default(0);
            $table->integer('published')->default(1);
            $table->text('stock_visibility_state')->default('quantity');
            $table->integer('cash_on_delivery')->default(1)->comment('1 = On, 0 = Off');
            $table->integer('featured')->default(0);
            $table->integer('seller_featured')->default(0);
            $table->integer('current_stock')->default(0);
            $table->text('unit')->nullable();
            $table->integer('min_qty')->default(1);
            $table->integer('low_stock_quantity')->nullable();
            $table->double('discount',20,2)->nullable();
            $table->text('discount_type')->nullable();
            $table->integer('discount_start_date')->nullable();
            $table->integer('discount_end_date')->nullable();
            $table->double('tax',20,2)->nullable();
            $table->text('tax_type')->nullable();
            $table->text('shipping_type')->nullable()->default('flat_rate');
            $table->text('shipping_cost')->nullable();
            $table->integer('is_quantity_multiplied')->default(0)->comment('1 = Mutiplied with shipping cost');
            $table->integer('est_shipping_days')->nullable();
            $table->integer('num_of_sale')->default(0);
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_img')->nullable();
            $table->text('pdf')->nullable();
            $table->text('slug');
            $table->double('rating',8,2)->default(0.00);
            $table->text('barcode')->nullable();
            $table->integer('digital')->default(0);
            $table->text('file_name')->nullable();
            $table->text('file_path')->nullable();
            $table->text('author_id')->nullable();
            $table->text('isbn')->nullable();
            $table->text('pages')->nullable();
            $table->text('binding')->nullable();
            $table->text('realsed_date')->nullable();
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
        Schema::dropIfExists('products');
    }
}
