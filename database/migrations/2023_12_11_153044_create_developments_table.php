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
        Schema::create('developments', function (Blueprint $table) {
            $table->id();
            $table->char('development_birth_history',23)->nullable();
            $table->tinyInteger('development_birth_weight')->nullable();
            $table->tinyInteger('development_birth_height')->nullable();
            $table->text('development_describe_abnormalities')->nullable();
            $table->foreignId('children_id')->constrained('childrens')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developments');
    }
};
