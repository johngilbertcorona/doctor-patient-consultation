<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->foreignId('doctor_id')->nullable();
            $table->string('has_appointment')->default('0')->comment('0 if none otherwise 1 if has appointment');
            $table->string('med_history')->nullable();
            $table->boolean('is_online')->comment('0 if online appointment, 1 if physical appointment');
            $table->time('app_time')->comment('appointment time');
            $table->date('app_date')->comment('appointment date');
            $table->boolean('app_status')->default('0')->comment('0 if  not approved, 1 if not approved');
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
        Schema::dropIfExists('patients');
    }
};
