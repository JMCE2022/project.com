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
        Schema::create('finders', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('relationship')->nullable();
            $table->string('occupation')->nullable();
            $table->text('others')->nullable();
            $table->text('problem_presented')->nullable();
            $table->text('background_information')->nullable();

            $table->foreignId('children_id')->constrained('childrens')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finders');
    }
};
