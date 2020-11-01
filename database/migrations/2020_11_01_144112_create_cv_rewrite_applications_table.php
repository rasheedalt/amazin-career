<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvRewriteApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_rewrite_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('service_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('phone_number');
            $table->text('cv');
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
        Schema::dropIfExists('cv_rewrite_applications');
    }
}
