<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('repair_price')->default(0);
            $table->integer('cost_price')->default(0);
            $table->unsignedBigInteger('group_work_id');
            $table->integer('warranty')->default(0);
            $table->integer('salary')->default(0);
            $table->string('comment')->nullable();

            $table->foreign('group_work_id')
                ->references('id')
                ->on('group_works');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
