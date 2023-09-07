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
        Schema::create('brand_personality_aaker_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bpa_id')->references('id')->on('brand_personality_aakers')->onDelete('cascade');
            $table->string('brand_personality_aaker');
            $table->string('result');
            $table->integer('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_personality_aaker_results');
    }
};
