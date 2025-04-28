<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToAlumnisTable extends Migration
{
    public function up()
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->string('image')->default('col_21.jpg')->change(); // set default image
        });
    }

    public function down()
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->string('image')->default(null)->change();  // remove default
        });
    }
}
