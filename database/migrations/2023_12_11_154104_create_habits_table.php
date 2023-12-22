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
        Schema::create('habits', function (Blueprint $table) {
            $table->id();
            $table->string('bedwetting')->nullable();
            $table->string('thumb_sucking')->nullable();
            $table->string('nail_biting')->nullable();
            $table->text('others')->nullable();
            $table->string('measles')->nullable();
            $table->string('chickenpox')->nullable();
            $table->string('mumps')->nullable();
            $table->string('allergy')->nullable();
            $table->string('convulsions')->nullable();
            $table->string('primary_complex')->nullable();
            $table->text('other_specify')->nullable();
            $table->text('motor_development')->nullable();
            $table->text('toilet_training')->nullable();
            $table->foreignId('children_id')->constrained('childrens')->onDelete('cascade')->onUpdate('cascade');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habits');
    }
};
