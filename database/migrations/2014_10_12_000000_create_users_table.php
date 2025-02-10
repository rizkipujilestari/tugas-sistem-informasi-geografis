<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email', 512)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->string('phone', 25)->unique();
            $table->text('address')->nullable();
            $table->text('photo')->nullable();
            $table->enum('role', ['admin', 'member'])->default('member');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
