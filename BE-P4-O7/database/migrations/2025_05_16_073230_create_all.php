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
        Schema::create('vehicle_types', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type', 50);
            $table->string('license_category', 5);
        });

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate', 20);
            $table->string('model', 100);
            $table->date('manufacture_date');
            $table->string('fuel_type', 20);
            $table->foreignId('vehicle_type_id')->constrained('vehicle_types')->unsigned();
        });

        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('infix', 20)->nullable();
            $table->string('last_name', 50);
            $table->string('mobile', 20);
            $table->date('hired_date');
            $table->string('star_rating', 10); // or use enum or bit flags if you want stricter structure
        });

        Schema::create('vehicle_instructor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('vehicles')->unsigned();
            $table->foreignId('instructor_id')->constrained('instructors')->unsigned();
            $table->date('assignment_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('vihicle_types');
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('instructors');
        Schema::dropIfExists('vehicle_instructor');
    }
};
