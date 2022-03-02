<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("device_category_id");
            $table->unsignedBigInteger("brand_id");
            $table->unsignedBigInteger('device_model_id');
            $table->unsignedBigInteger("device_status_id");
            $table->unsignedBigInteger('order_type_id');

            $table->string("number_mobile")->nullable();
            $table->text("defect");
            $table->timestamp("complete_before");

            $table->foreign('device_category_id')->references('id')->on('device_categories');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('device_model_id')->references('id')->on('device_models');
            $table->foreign('device_status_id')->references('id')->on('device_statuses');
            $table->foreign('order_type_id')->references('id')->on('order_types');

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
        Schema::dropIfExists('devices');
    }
}
