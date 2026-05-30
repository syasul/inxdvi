<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // cth: E-Wallet App
            $table->string('slug')->unique(); // cth: e-wallet-app
            $table->string('category'); // cth: FINTECH, COMMERCE
            $table->string('client_name')->nullable(); // cth: Bu Haji Halimah
            $table->string('image_path'); // Path gambar cover
            $table->text('problem_description')->nullable(); // Keluhan awal klien
            $table->text('solution_description')->nullable(); // Solusi yang diberikan
            $table->text('result_description')->nullable(); // Hasil (cth: Omzet Naik 2x)
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
