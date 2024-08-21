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
            $table->string('name')->comment("First Name");
            $table->string('lastName')->nullable()->default('')->comment("Last Name");
            $table->string('email')->unique()->comment("User email address");
            $table->string('role')->default('user')->comment("Role for admin and user");
            $table->boolean('status')->default(1)->comment("Status: 1 active, 0 inactive");
            $table->timestamp('email_verified_at')->nullable()->comment("Email verification timestamp");
            $table->string('password');
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
