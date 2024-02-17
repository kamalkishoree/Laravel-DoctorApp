<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToDoctorInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor_informations', function (Blueprint $table) {
            $table->string('facebook_url')->after('doctor_id')->nullable();
            $table->string('instagram_url')->after('facebook_url')->nullable();
            $table->string('linkedin_url')->after('instagram_url')->nullable();
            $table->string('twitter_url')->after('linkedin_url')->nullable();
            $table->text('short_description')->after('twitter_url')->nullable();
            $table->text('long_description')->after('short_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_informations', function (Blueprint $table) {
            //
        });
    }
}
