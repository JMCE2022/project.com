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
        Schema::create('infofamilies', function (Blueprint $table) {
            $table->id();
            $table->char('infofamily_name_of_father',60)->nullable();
            $table->char('infofamily_name_of_mother',60)->nullable();
            $table->tinyInteger('infofamily_age_of_father');
            $table->tinyInteger('infofamily_age_of_mother');
            $table->char('infofamily_address',150)->nullable();
            $table->char('infofamily_occupation',20)->nullable();
            $table->ForeignId('children_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infofamilies');
    }
};
