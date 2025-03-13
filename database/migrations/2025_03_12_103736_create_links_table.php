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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 20)->nullable();
            $table->string('phone_2', 20)->nullable();
            $table->string('phone_3', 20)->nullable();
            $table->string('whatsapp',20)->nullable();
            $table->string('instagram')->nullable();
            $table->string('email')->nullable();
            $table->string('email_2')->nullable();
            $table->string('adresse')->nullable();
            $table->string('adresse_2')->nullable();
            $table->string('adresse_3')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
