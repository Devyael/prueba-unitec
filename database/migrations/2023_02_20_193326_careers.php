<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->bigIncrements('ca_id');
            $table->unsignedBigInteger('ca_scholarship_id');
            $table->text('ca_name');
            $table->timestamp('created_at')->nullable();

            $table->foreign('ca_scholarship_id')->references('sc_id')->on('scholarship');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
};
