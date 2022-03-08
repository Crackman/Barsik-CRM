<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('counterparty_id');
            $table->unsignedBigInteger('incoming_number');
            $table->unsignedBigInteger('summa')->default(0);
            $table->text('comment')->nullable();
            $table->timestamp('acceptance_date');

            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('counterparty_id')->references('id')->on('counterparties');
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
        Schema::dropIfExists('postings');
    }
}
