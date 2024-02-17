<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('patient_id')->unsigned();
			$table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('dob');
            $table->string('weight');
            $table->string('height');
            $table->enum('blood_pressure', ['0', '1'])->default('0')->nullable();;
            $table->enum('blood_suger', ['0', '1'])->default('0')->nullable();;
            $table->mediumText('symptom');
            $table->mediumText('allergy');
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
        Schema::dropIfExists('patient_informations');
    }
}
