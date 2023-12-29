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
            $table->char('firstname',50);
            $table->char('lastname',30);
            $table->char('sex',10);
            $table->tinyInteger('age')->nullable()->change();
            $table->char('religion',50)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->char('place_of_birth',100)->nullable();
            $table->char('educational_attainment',100)->nullable();
            $table->char('region',20)->nullable();
            $table->char('province',50)->nullable();
            $table->char('city',50)->nullable();
            $table->char('barangay',50)->nullable();
            $table->char('street_address',50)->nullable();
            $table->text('present_health_condition')->nullable();
            $table->text('physical_characteristic')->nullable();
            $table->char('created_by',100)->nullable();
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
