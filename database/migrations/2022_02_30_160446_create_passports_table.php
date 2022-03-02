<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('counterparty_id');
            $table->string('series')->nullable(1);
            $table->string('issued_by')->nullable();
            $table->string('department_code')->nullable();
            $table->timestamp('date_birth')->nullable();
            $table->timestamp('date_issue')->nullable();
            $table->string('place_birth')->nullable();
            $table->string('inn')->nullable();


            $table->foreign('counterparty_id')
                ->references('id')
                ->on('counterparties')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passports');
    }
}
