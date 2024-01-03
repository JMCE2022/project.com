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
            $table->char('guardian_name',100)->nullable();
            $table->tinyInteger('guardian_age')->nullable()->change();
            $table->char('guardian_sex',10)->nullable();
            $table->char('guardian_occupation',50)->nullable();
            $table->text('guardian_circumstances_of_guardian')->nullable();
            $table->text('guardian_economic_situation_of_the_family')->nullable();
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
