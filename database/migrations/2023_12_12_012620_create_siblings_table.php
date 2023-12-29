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
        Schema::create('siblings', function (Blueprint $table) {
            $table->id();
            $table->char('fullname',100)->nullable();
            $table->tinyInteger('age')->nullable()->change();
            $table->char('sex',10)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->char('educational_attainment',100)->nullable();
            $table->char('relationship',30)->nullable();
            $table->ForeignId('children_id')->constrained('childrens')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siblings');
    }
};
