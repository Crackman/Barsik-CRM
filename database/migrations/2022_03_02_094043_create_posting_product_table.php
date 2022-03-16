<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posting_product', function (Blueprint $table) {
            $table->unsignedBigInteger('posting_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('count')->default(0);

            $table->foreign('posting_id')
                ->references('id')
                ->on('postings')
                ->onDelete('cascade');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
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
        Schema::dropIfExists('posting_product');
    }
}
