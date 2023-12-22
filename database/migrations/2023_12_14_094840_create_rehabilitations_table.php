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
        Schema::create('rehabilitations', function (Blueprint $table) {
            $table->id();
            $table->text('restore_develop')->nullable();    
            $table->text('improve')->nullable();    
            $table->text('reintegrate')->nullable();    
            $table->text('placed')->nullable();    
            $table->text('refer')->nullable();    
            $table->text('transfer')->nullable();    
            $table->foreignId('children_id')->constrained('childrens')->onDelete('cascade')->onUpdate('cascade');  

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rehabilitations');
    }
};
