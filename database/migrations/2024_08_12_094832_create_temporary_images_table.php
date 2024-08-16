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
        Schema::create('temporary_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('image_template_id');
            $table->foreign('image_template_id')->references('id')->on('image_templates')->onDelete('cascade');
            $table->unsignedBigInteger('response_id')->nullable();
            $table->foreign('response_id')->references('id')->on('responses')->onDelete('cascade');
            $table->text('image')->nullable();
            $table->string('judul')->nullable();
            $table->string('deskripsi')->nullable();
            $table->integer('type');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temporary_images');
    }
};
