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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('avatar')->nullable()->default('user-default.png');
            $table->string('alias')->nullable();
            $table->date('joined_at')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('status')->default(1)->comment('1: Active, 0: Inactive');
            $table->integer('role')->default(0)->comment('0: User, 1: Admin, 2: Super Admin');
            $table->foreignId('rank_id')->constrained();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
