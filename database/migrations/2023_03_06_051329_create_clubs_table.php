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
        Schema::create('clubs', function (Blueprint $table)
        {
            $table->id();
            $table->foreignId('stadiums_id')->nullable()->index('stadiums_id_fk1_idx');
            $table->string('name', 100); // defaultnya 255
            $table->longText('logo')->nullable();
            $table->longText('url')->nullable();
            $table->integer('thropy')->nullable();
            $table->timestamps(); // otomatis dari laravel -> created_at sama updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};