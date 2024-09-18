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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->text('description')->nullable();
            $table->integer('discount')->default(0);
            $table->integer('limit')->default(0);
            $table->integer('in_stock')->default(0);
            $table->date('expired_at')->nullable();
            $table->integer('status')->default(1)->comment('0: Inactive, 1: Active');
            $table->integer('for_all')->default(0)->comment('0: No, 1: Yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
