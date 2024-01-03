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
            $table->char('suffix',6)->nullable();
            $table->char('sex',1)->nullable();
            $table->char('place_of_birth',30)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->char('religion',30)->nullable();
            $table->char('age',2)->nullable()->change();
            $table->char('civil_status',10)->nullable();
            $table->tinyInteger('height',250)->nullable(); // height in CM
            $table->tinyInteger('weight',200)->nullable(); // weight in Kilogram
            $table->char('phone_number', 12)->nullable();
            $table->char('email_address',50)->nullable();
            $table->char('region',45)->nullable();
            $table->char('province',40)->nullable();
            $table->char('city',40)->nullable();
            $table->char('barangay',30)->nullable();
            $table->char('street_address',30)->nullable(); // You mentioned 'No./Sition/Purok'
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
