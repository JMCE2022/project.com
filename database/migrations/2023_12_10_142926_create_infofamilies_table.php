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
            $table->string('name_of_father')->nullable();
            $table->string('name_of_mother')->nullable();
            $table->string('age_of_father')->nullable();
            $table->string('age_of_mother')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
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
