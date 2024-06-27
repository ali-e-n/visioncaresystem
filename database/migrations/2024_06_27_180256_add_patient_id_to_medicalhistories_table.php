<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPatientIdToMedicalhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('medical_histories', function (Blueprint $table) {
        $table->unsignedBigInteger('patient_id');
        $table->foreign('patient_id')->references('id')->on('patients');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicalhistories', function (Blueprint $table) {
            //
        });
    }
}
