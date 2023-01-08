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
        Schema::create('life_insurances', function (Blueprint $table) {
            $table->id();
            $table->string('insurance_target');
            $table->string('birth_year');
            $table->string('birth_month');
            $table->string('birth_day');
            $table->string('life_ins_duration');
            $table->string('payment_method');
            $table->string('annual_payment');
            $table->string('first_job_level');
            $table->string('first_job_level_id');
            $table->string('divided_payment');
            $table->string('annual_payment_increase');
            $table->string('addon_payment_method');
            $table->string('death_capital_any_reason_ratio');
            $table->string('capital_increase');
            $table->string('death_capital_incident_ratio')->nullable();
            $table->string('maim_ratio')->nullable();
            $table->string('has_medical_cost')->nullable();
            $table->string('additional_dangers')->nullable();
            $table->string('hospitalization')->nullable();
            $table->string('exemption')->nullable();
            $table->string('special_diseases_ratio')->nullable();
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
        Schema::dropIfExists('life_insurances');
    }
};
