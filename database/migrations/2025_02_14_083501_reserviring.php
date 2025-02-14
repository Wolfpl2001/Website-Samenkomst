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
        schema::create('Reserviring', function (Blueprint $table) {
            $table->id();
            $table->text('first_name', 50);
            $table->text('last_name', 50);
            $table->foreignId('local_id')->constrained('Locals');
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
        Schema::dropIfExists('Reserviring');
    }
};
