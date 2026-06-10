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
        // Alter portfolios
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('industry', 100)->nullable()->after('category');
            $table->text('description')->nullable()->after('client_name');
            $table->text('challenge')->nullable()->after('description');
            $table->text('solution')->nullable()->after('challenge');
            $table->string('result_metric')->nullable()->after('solution');
            $table->string('thumbnail_url', 500)->nullable()->after('image_path');
            $table->json('images')->nullable()->after('thumbnail_url');
            $table->json('tags')->nullable()->after('images');
            $table->boolean('is_featured')->default(false)->after('tags');
            $table->integer('sort_order')->default(0)->after('is_featured');
        });

        // Alter faqs
        Schema::table('faqs', function (Blueprint $table) {
            $table->string('category', 100)->nullable()->after('answer');
            $table->integer('sort_order')->default(0)->after('category');
        });

        // Alter articles
        Schema::table('articles', function (Blueprint $table) {
            $table->json('tags')->nullable()->after('category');
            $table->string('author_name', 100)->nullable()->after('user_id');
            $table->integer('read_time_min')->default(5)->after('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn(['industry', 'description', 'challenge', 'solution', 'result_metric', 'thumbnail_url', 'images', 'tags', 'is_featured', 'sort_order']);
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->dropColumn(['category', 'sort_order']);
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['tags', 'author_name', 'read_time_min']);
        });
    }
};
