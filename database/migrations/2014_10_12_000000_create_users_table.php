<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('dni')->nullable();
    		$table->date('birthdate')->nullable();
    		$table->enum('gender', ['NA', 'F', 'M'])->nullable();
    		$table->string('city')->nullable();
    		$table->string('province')->nullable();
            $table->integer('country')->nullable();
            $table->string('ipAddress')->nullable();
            $table->string('provider')->nullable();
     		$table->string('provider_id')->nullable();
            $table->char('verified', 1)->default(0);
            $table->char('status', 1)->default(0);
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
