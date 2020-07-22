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
            $table->string('first_name');
            $table->string('last_name');

            $table->string('email')->unique();  // konten pada kolom tidak boleh kembar
            $table->timestamp('email_verified_at')->nullable();  // tersedia secara default
            $table->string('password');
            $table->string('api_token', 60)->unique();  // string('nama kolom', 'length')

            $table->string('user_type')->default('user');  // ['admin', 'author', 'user']

            $table->json('liked_post')->nullable();  // nullable : boleh NULL
            $table->json('disliked_post')->nullable();
            $table->json('favorites')->nullable();
            $table->json('favorite_categories')->nullable();

            $table->json('preferences')->nullable();
            $table->string('avatar')->nullable();

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
