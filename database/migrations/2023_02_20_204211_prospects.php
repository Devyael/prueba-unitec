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
        Schema::create('prospects', function (Blueprint $table) {
            $table->bigIncrements('pr_id');
            $table->unsignedBigInteger('pr_user_id');
            $table->text('pr_name');
            $table->text('pr_lastname_one');
            $table->text('pr_lastname_two');
            $table->unsignedBigInteger('pr_gender_id');
            $table->integer('pr_age');
            $table->unsignedBigInteger('pr_marital_status_id');
            $table->unsignedBigInteger('pr_scholarship_id');
            $table->unsignedBigInteger('pr_career_id')->nullable()->constrained();
            $table->timestamp('created_at')->nullable();

            $table->foreign('pr_user_id')->references('id')->on('users');
            $table->foreign('pr_gender_id')->references('ge_id')->on('genders');
            $table->foreign('pr_marital_status_id')->references('ms_id')->on('marital_status');
            $table->foreign('pr_scholarship_id')->references('sc_id')->on('scholarship');
            $table->foreign('pr_career_id')->references('ca_id')->on('careers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospects');
    }
};
