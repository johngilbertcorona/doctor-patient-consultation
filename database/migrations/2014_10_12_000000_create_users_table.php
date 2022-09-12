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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('specialization')->nullable()->comment('specialization for doctor role');
            $table->boolean('role')->default('1')->comment('1 for patient, 2 for doctor, 0 for administrator');

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
        Schema::dropIfExists('users');
    }
};
