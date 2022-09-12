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
            $table->integer('patient_id');
            $table->string('med_history')->nullable();
            $table->boolean('is_online')->comment('1 if online appointment, 2 if physical appointment');
            $table->time('app_time')->comment('appointment time');
            $table->date('app_date')->comment('appointment date');
            $table->boolean('app_status')->comment('1 if approved, 2 if not approved');
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
