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
            $table->char('firstname',30);
            $table->char('lastname',30);
            $table->char('sex',1);
            $table->tinyInteger('age')->nullable()->default(0);
            $table->char('religion',30)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->char('place_of_birth',30)->nullable();
            $table->char('educational_attainment',20)->nullable();
            $table->char('region',45)->nullable();
            $table->char('province',40)->nullable();
            $table->char('city',40)->nullable();
            $table->char('barangay',30)->nullable();
            $table->char('street_address',30)->nullable();
            $table->text('present_health_condition')->nullable();
            $table->text('physical_characteristic')->nullable();
            $table->char('created_by',60)->nullable();
            $table->tinyInteger('is_deleted')->default('0');
            $table->date('discharge_date')->nullable()->after('updated_at');
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
