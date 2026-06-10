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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name', 100);
            $table->string('position', 100)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('industry', 100)->nullable();
            $table->text('quote');
            $table->unsignedTinyInteger('rating')->default(5);
            $table->string('photo_url', 500)->nullable();
            $table->string('video_url', 500)->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_video')->default(false);
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
