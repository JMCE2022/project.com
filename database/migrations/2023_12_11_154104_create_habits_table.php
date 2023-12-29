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
            $table->char('bedwetting',30)->nullable();
            $table->char('thumb_sucking',30)->nullable();
            $table->char('nail_biting',30)->nullable();
            $table->text('others')->nullable();
            $table->char('measles',30)->nullable();
            $table->char('chickenpox',30)->nullable();
            $table->char('mumps',30)->nullable();
            $table->char('allergy',30)->nullable();
            $table->char('convulsions',30)->nullable();
            $table->char('primary_complex',30)->nullable();
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
