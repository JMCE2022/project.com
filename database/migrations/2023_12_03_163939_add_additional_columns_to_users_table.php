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
        Schema::table('users', function (Blueprint $table) {
            $table->char('middle_initial', 1)->nullable();
            $table->string('suffix')->nullable();
            $table->string('sex')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->char('date_of_birth', 100)->nullable();
            $table->string('religion')->nullable();
            $table->char('age', 3)->nullable();
            $table->string('civil_status')->nullable();
            $table->char('height', 5)->nullable();
            $table->char('weight', 5)->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->string('street_address')->nullable(); // You mentioned 'No./Sition/Purok'
            $table->char('zip_code', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'middle_initial',
                'suffix',
                'sex',
                'place_of_birth',
                'date_of_birth',
                'religion',
                'age',
                'civil_status',
                'height',
                'weight',
                'phone_number',
                'email_address',
                'region',
                'province',
                'city',
                'barangay',
                'street_address',
                'zip_code',
            ]);
        });
    }
};
