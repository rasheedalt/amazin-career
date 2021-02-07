<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToCompanyRegistrationapplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_registration_applications', function (Blueprint $table) {
            $table->string('name_of_business_owner');
            $table->string('nature_of_bussiness');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_registration_applications', function (Blueprint $table) {
            $table->dropColumn('name_of_business_owner');
            $table->dropColumn('nature_of_bussiness');
        });
    }
}
