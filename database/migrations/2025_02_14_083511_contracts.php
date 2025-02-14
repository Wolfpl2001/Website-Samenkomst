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
        Schema::create('Contracts', function (Blueprint $table) {
            $table->id();
            $table->char('Company_Name', 50);
            $table->foreignId('Reserviring_id')->constrained('Reserviring');
            $table->date('Start_Date');
            $table->date('End_Date');
            $table->text('Status', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Contracts');
    }
};
