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
        Schema::create('image_templates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_image_template_id');
            $table->foreign('category_image_template_id')->references('id')->on('category_image_templates')->onDelete('cascade');
            $table->text('contoh');
            $table->text('template');
            $table->text('text');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_templates');
    }
};
