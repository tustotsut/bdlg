<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('register_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('t_shirt_size');
            $table->string('lg_level');
            $table->string('gender');
            $table->string('dob');
            $table->string('profession');
            $table->string('organization');
            $table->string('fb_link');
            $table->string('connect_profile');
            $table->string('map_profile');
            $table->string('present_address');
            $table->string('present_division');
            $table->string('present_district');
            $table->string('present_upazila');
            $table->string('permanent_address');
            $table->string('permanent_division');
            $table->string('permanent_district');
            $table->string('permanent_upazila');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_users');
    }
};
