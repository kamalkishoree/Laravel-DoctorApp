<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id');
            $table->bigInteger('specialist_id')->unsigned();
			$table->foreign('specialist_id')->references('id')->on('specialists')->onDelete('cascade');
            $table->bigInteger('doctor_id');
            $table->bigInteger('patient_id');
            $table->date('booking_date');
            $table->string('name');
            $table->string('phone');
            $table->time('time_slot');
            $table->enum('status', ['Pending', 'Approved','Completed','Rejected'])->default('Pending');
            $table->dateTime('created');
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
        Schema::dropIfExists('bookings');
    }
}
