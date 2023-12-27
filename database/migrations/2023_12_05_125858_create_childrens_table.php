<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('sex');
            $table->char('age');
            $table->string('religion')->nullable();
            $table->char('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->string('street_address')->nullable();
            $table->text('present_health_condition')->nullable();
            $table->text('physical_characteristic')->nullable();
            $table->string('created_by')->nullable();
            $table->tinyInteger('is_deleted')->default('0');
            $table->timestamps();
        });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childrens');
    }
};
