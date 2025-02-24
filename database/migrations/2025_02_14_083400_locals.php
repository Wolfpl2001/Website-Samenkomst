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
        Schema::create('locals', function (Blueprint $table) {
                $table->id();
                $table->integer('num')->unique(); 
                $table->string('type', 20);
                $table->integer('max_people'); 
                $table->char('table', 10);
                $table->text('screen'); 
                $table->text('status'); 
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals');
    }
};