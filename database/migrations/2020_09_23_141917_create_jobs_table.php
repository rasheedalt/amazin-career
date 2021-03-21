<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->index('job_title_indx');
            $table->text('description');
            $table->text('company_name')->nullable()->index('job_company_name_idx');
            $table->text('address')->nullable();
            $table->string('deadline')->nullable();
            $table->text('application_mode');
            $table->text('salary')->nullable();
            $table->text('link')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('jobs');
    }
}
