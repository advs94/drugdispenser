<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsPillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_pills', function (Blueprint $table) {
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('pill_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('pill_id')->references('id')->on('pills');
           // $table->primary('patient_id, pill_id');
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
        Schema::dropIfExists('patients_pills');
    }
}
