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
        Schema::create('caregivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address');
            $table->string('phone_number')->unique()->nullable();
            $table->timestamp('phone_number_verified_at')->nullable();
            $table->foreignId('city_id')->constrained('cities');
            $table->json('verification_documents')->nullable();
            $table->timestamp('verification_verified_at')->nullable();
            $table->string('dp')->nullable();
            $table->string('description')->nullable();
            $table->enum('gender', ['male', 'female','other'])->nullable();
            $table->date('date_of_birth')->nullable();
            $table->json('education')->nullable();
            $table->string('category');
            $table->json('experience')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregivers');
    }
};
