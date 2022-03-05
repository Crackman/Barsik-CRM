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
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('group_product_id');
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('purchase_price')->default(0);
            $table->unsignedBigInteger('retail_price');
            $table->unsignedBigInteger('repair_price')->default(0);
            $table->unsignedBigInteger('min_balance')->nullable();
            $table->boolean('dirty')->default(FALSE);
            $table->string('photo')->nullable();
            $table->string('warranty')->default('0');

            $table->foreign('parent_id')
                ->references('id')
                ->on('products');

            $table->foreign('group_product_id')
                ->references('id')
                ->on('group_products');
            $table->foreign('unit_id')
                ->references('id')
                ->on('units');
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
