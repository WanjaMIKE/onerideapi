<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID
            $table->string('name');  // User's name
            $table->string('email')->unique();  // User's email (unique)
            $table->string('phone')->unique();  // User's phone (unique)
            $table->string('password');  // User's password
            $table->enum('role', ['rider', 'driver']);  // Role: rider or driver
            $table->timestamps();  // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
