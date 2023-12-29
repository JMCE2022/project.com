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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->char('name',100)->nullable();
            $table->tinyInteger('age')->nullable()->change();
            $table->char('sex',10)->nullable();
            $table->char('occupation',50)->nullable();
            $table->text('circumstances_of_guardian')->nullable();
            $table->text('economic_situation_of_the_family')->nullable();
            $table->ForeignId('children_id')->constrained('childrens')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
