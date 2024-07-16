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
        Schema::create('agency_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('surname')->required();
            $table->date('birthdate')->required();
            $table->string('email')->unique()->required();
            $table->string('street')->required();
            $table->string('optional_field')->nullable();
            $table->string('city')->required();
            $table->string('district')->required();
            $table->string('zip_code')->required();
            $table->string('country')->required();
            $table->string('passport_number')->required();
            $table->date('passport_expiry')->required();
            $table->string('phone')->required();
            $table->text('attachment')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_users');
    }
};
