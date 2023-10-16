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
        Schema::create('level_umkms', function (Blueprint $table) {
            $table->id();
            $table->string('merk')->nullable();
            $table->string('whatsapp_bisnis')->nullable();
            $table->string('gbusiness')->nullable();
            $table->string('landing_page')->nullable();
            $table->string('sosmed')->nullable();
            $table->string('ecommerce')->nullable();
            $table->string('team')->nullable();
            $table->bigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_umkms');
    }
};
