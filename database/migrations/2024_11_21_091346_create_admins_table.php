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
        Schema::create('user_barus', function (Blueprint $table) {
            $table->integerIncrements('id_user');
            $table->string('nama')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->enum('role',['admin','kasir','owner','waiter']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_barus');
    }
};
