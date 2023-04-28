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
            $table->increments('id');
            $table->integer('service_id');
            $table->integer('user_id');
            $table->string('phone_number')->nullable();
            $table->string('status')->default('pending');
            $table->date('booking_date');
            $table->string('booking_time', 500);
            $table->integer('quantity')->default(1);
            $table->string('comment')->nullable();
            $table->string('adult')->nullable();
            $table->string('transaction_id');
            $table->string('children')->nullable();
            $table->double('booking_bill');
            $table->string('calendar_event_id')->nullable();
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
