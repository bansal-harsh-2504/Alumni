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
            $table->string('name');
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
            $table->string('Middle_Name');
            $table->string('Surname');
            $table->string('Phone_Number');
            $table->string('Work_station');
            $table->string('Course');
            $table->string('Profession');
            $table->string('Location');
            $table->string('Year')->nullable();
            $table->string('email');
            $table->string('Avatar');
            $table->string('password');
            $table->string('Year_joined');
            $table->string('Year_graduated');
            $table->string('gender');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('job_title');
            $table->string('email')->unique();
            $table->string('staffID')->unique();
            $table->boolean('isSuper')->default(false);
            $table->string('password');
            $table->string('avatar');
            $table->string('department');
            $table->string('gender');
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
