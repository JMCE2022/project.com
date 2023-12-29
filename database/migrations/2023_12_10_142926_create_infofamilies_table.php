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
            $table->char('name_of_father',100)->nullable();
            $table->char('name_of_mother',100)->nullable();
            $table->tinyInteger('age_of_father')->change();
            $table->tinyInteger('age_of_mother')->change();
            $table->char('address',150)->nullable();
            $table->char('occupation',50)->nullable();
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
