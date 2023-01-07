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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->integer('fanavaran_id')->unique();
            $table->integer('code')->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('national_code')->nullable();
            $table->string('tel')->nullable();
            $table->string('mobile')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('address')->nullable();
            $table->string('unit_name')->nullable();
            $table->integer('unit_kind_id')->nullable();
            $table->integer('is_active')->nullable();
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
        Schema::dropIfExists('agencies');
    }
};
