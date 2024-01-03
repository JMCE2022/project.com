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
            $table->char('finder_fullname',100)->nullable();
            $table->tinyInteger('finder_age')->nullable()->change();
            $table->char('finder_sex',10)->nullable();
            $table->char('finder_civil_status',10)->nullable();
            $table->char('finder_relationship',20)->nullable();
            $table->char('finder_occupation',50)->nullable();
            $table->text('finder_others')->nullable();
            $table->text('finder_problem_presented')->nullable();
            $table->text('finder_background_information')->nullable();

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
