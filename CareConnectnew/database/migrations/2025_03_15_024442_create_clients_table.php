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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address');
            $table->string('phone_number')->unique()->nullable();
            $table->timestamp('phone_number_verified_at')->nullable();
            $table->json('verification_documents')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->foreignId('country_id')->constrained('countries');
            $table->string('dp')->nullable();
            $table->enum('gender', ['male', 'female','other'])->nullable();
            $table->date('date_of_birth')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
