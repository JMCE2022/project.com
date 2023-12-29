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
            $table->char('fullname',100)->nullable();
            $table->tinyInteger('age')->nullable()->change();
            $table->char('sex',10)->nullable();
            $table->char('civil_status',10)->nullable();
            $table->char('relationship',20)->nullable();
            $table->char('occupation',50)->nullable();
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
