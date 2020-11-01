<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyRegistrationApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_registration_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_proposed_business_name');
            $table->string('second_proposed_business_name');
            $table->string('email_address');
            $table->text('business_address');
            $table->string('phone_number');
            $table->string('start_date');
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
        Schema::dropIfExists('company_registration_applications');
    }
}
