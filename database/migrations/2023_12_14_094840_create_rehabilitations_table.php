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
            $table->text('rehabilitation_restore_develop')->nullable();    
            $table->text('rehabilitation_improve')->nullable();    
            $table->text('rehabilitation_reintegrate')->nullable();    
            $table->text('rehabilitation_placed')->nullable();    
            $table->text('rehabilitation_refer')->nullable();    
            $table->text('rehabilitation_transfer')->nullable();    
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
