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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type')->default(1)->comment('1: Deposit, 2: Purchase');
            $table->integer('amount');
            $table->integer('status')->default(1)->comment('0: Failed, 1: Pending, 2: Success');
            $table->string('note')->nullable();
            $table->string('bank_code');
            $table->string('bank_account');
            $table->string('bank_account_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
