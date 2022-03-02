<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounterpartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counterparties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->unsignedTinyInteger('counterparty_type_id')->nullable();
            $table->unsignedTinyInteger('respect_id')->nullable();
            $table->unsignedTinyInteger('group_counterparty_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('remark')->nullable();

            $table->foreign('counterparty_type_id')->references('id')->on('counterparty_types');
            $table->foreign('respect_id')->references('id')->on('respects');
            $table->foreign('group_counterparty_id')->references('id')->on('group_counterparties');
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
        Schema::dropIfExists('counterparties');
    }
}
