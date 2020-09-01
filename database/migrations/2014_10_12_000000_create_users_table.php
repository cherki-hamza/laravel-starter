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
            $table->string('email')->unique();
            $table->string('mobile')->unique()->nullable();
            $table->enum('sex',['man','women','robot','human'])->default('human');
            $table->enum('role',['super-user','admin','editor','viewer'])->default('viewer');
            $table->enum('status',[0,1])->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('github_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('linkden_id')->nullable();
            $table->string('password')->nullable();
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
