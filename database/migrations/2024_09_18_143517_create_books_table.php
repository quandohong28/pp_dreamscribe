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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('cover_image')->nullable()->default('cover-default.png');
            $table->text('description')->nullable();
            $table->integer('is_hot')->default(0)->comment('0: No, 1: Yes');
            $table->date('published_date')->nullable();
            $table->integer('number_chapter')->default(0);
            $table->integer('status')->default(0)->comment('0: Draft, 1: Published');
            $table->integer('is_completed')->default(0)->comment('0: No, 1: Yes');
            $table->integer('price')->default(0);
            $table->integer('discount_price')->default(0);
            $table->integer('view')->default(0);
            $table->integer('like')->default(0);
            $table->foreignId('category_id')->constrained();
            $table->foreignId('author_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
