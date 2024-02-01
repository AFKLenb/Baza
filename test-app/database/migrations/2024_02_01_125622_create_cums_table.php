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
        Schema::create('cums', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('text');
            $table->text('price');
            $table->boolean('rating')->default('0');
            $table->text('quantity');
            $table->text('image');
            $table->boolean('is_active')->default('0');
            $table->foreignId('collection_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cums');
    }
};
