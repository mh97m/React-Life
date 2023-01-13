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
            $table->string('second_job_level');
            $table->string('second_job_level_id');
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
            $table->string('national_code')->unique()->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('ins_target_height')->nullable();
            $table->string('ins_target_weight')->nullable();
            $table->string('gender')->nullable();
            $table->string('military_service_status')->nullable();
            $table->string('military_service_details')->nullable();
            $table->string('military_service_reason')->nullable();
            $table->string('father_life_status')->nullable();
            $table->string('father_age')->nullable();
            $table->string('father_death_reason')->nullable();
            $table->string('mother_life_status')->nullable();
            $table->string('mother_age')->nullable();
            $table->string('mother_death_reason')->nullable();
            $table->string('family_health_history')->nullable();
            $table->string('family_health_history_reason')->nullable();
            $table->string('smoking_status')->nullable();
            $table->string('hospitalization_status')->nullable();
            $table->string('hospitalization_reason')->nullable();
            $table->string('physical_impairment')->nullable();
            $table->string('drug_usage')->nullable();
            $table->string('health_status')->nullable();
            $table->string('disease_type')->nullable();
            $table->string('weight_loss')->nullable();
            $table->string('weight_loss_reason')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
