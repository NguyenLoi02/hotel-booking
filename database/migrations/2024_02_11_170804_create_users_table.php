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
            $table->string('user_id');
            $table->string('last_name');
            $table->string('first_name');
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('phonenum');
            $table->string('email')->unique();
            $table->string('address');
            $table->date('dob');
            $table->string('profile');
            $table->string('password');
            $table->date('date_sign');
            $table->rememberToken();
            $table->timestamps();
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
