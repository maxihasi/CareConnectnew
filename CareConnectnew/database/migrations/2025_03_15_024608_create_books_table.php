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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caregiver_id')->constrained('caregivers');
            $table->foreignId('caregiver_name')->constrained('caregivers');
            $table->foreignId('caregiver_category')->constrained('caregivers');
            $table->foreignId('caregiver_phone_number')->constrained('caregivers');
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('client_name')->constrained('clients');
            $table->foreignId('client_address')->constrained('clients');
            $table->foreignId('client_phone_number')->constrained('clients');
            $table->string('title');
            $table->string('description');
            $table->enum('charge_type',['hourly','daily','monthly','weekly']);
            $table->decimal('amount', 8, 2);
            $table->foreignId('city_id')->constrained('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
