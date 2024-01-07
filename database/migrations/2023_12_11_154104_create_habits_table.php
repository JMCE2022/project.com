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
            $table->char('habit_bedwetting',3)->nullable();
            $table->char('habit_thumb_sucking',3)->nullable();
            $table->char('habit_nail_biting',3)->nullable();
            $table->text('habit_others')->nullable();
            $table->char('habit_measles',3)->nullable();
            $table->char('habit_chickenpox',3)->nullable();
            $table->char('habit_mumps',3)->nullable();
            $table->char('habit_allergy',3)->nullable();
            $table->char('habit_convulsions',3)->nullable();
            $table->char('habit_primary_complex',3)->nullable();
            $table->text('habit_other_specify')->nullable();
            $table->text('habit_motor_development')->nullable();
            $table->text('habit_toilet_training')->nullable();
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
