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
        Schema::create('habit_triggers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habit_log_id')->constrained()->cascadeOnDelete();
            $table->string('trigger_type');
            $table->string('custom_trigger')->nullable(); // por si es "other"
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habit_triggers');
    }
};
