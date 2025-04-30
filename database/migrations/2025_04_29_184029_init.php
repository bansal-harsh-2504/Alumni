<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('First_Name');
            $table->string('Middle_Name')->nullable();
            $table->string('Surname')->nullable();
            $table->string('Phone_Number')->nullable();
            $table->string('Work_station')->nullable();
            $table->string('Course')->nullable();
            $table->string('Profession')->nullable();
            $table->string('Location')->nullable();
            $table->string('Year')->nullable();
            $table->string('email');
            $table->string('Avatar')->nullable();
            $table->string('password');
            $table->string('Year_joined')->nullable();
            $table->string('Year_graduated')->nullable();
            $table->string('gender')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('job_title')->nullable();
            $table->string('email')->unique();
            $table->string('staffID')->unique()->nullable();
            $table->boolean('isSuper')->default(false);
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('department')->nullable();
            $table->string('gender')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('details');
            $table->string('eventdate');
            $table->string('author');
            $table->string('location');
            $table->string('image')->default('col_21.jpg');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('alumnis');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('events');
    }
}
