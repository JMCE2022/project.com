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
            $table->char('suffix',10)->nullable();
            $table->char('sex',10)->nullable();
            $table->char('place_of_birth',100)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->char('religion',50)->nullable();
            $table->tinyInteger('age')->nullable()->change();
            $table->char('civil_status',10)->nullable();
            $table->tinyInteger('height')->nullable(); // height in CM
            $table->tinyInteger('weight')->nullable(); // weight in Kilogram
            $table->tinyInterger('phone_number', 13)->nullable();
            $table->char('email_address',50)->nullable();
            $table->char('region',20)->nullable();
            $table->char('province',50)->nullable();
            $table->char('city',50)->nullable();
            $table->char('barangay',50)->nullable();
            $table->char('street_address',50)->nullable(); // You mentioned 'No./Sition/Purok'
            $table->char('zip_code', 4)->nullable();
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
