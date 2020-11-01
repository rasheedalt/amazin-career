<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkedinOptimizationApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkedin_optimization_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('linkedin_username');
            $table->string('linkedin_password');
            $table->string('email_address');
            $table->string('phone_number');
            $table->text('cv');
            $table->text('picture');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linkedin_optimization_applications');
    }
}
