<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeYearNullableInAlumnisTable extends Migration
{
    public function up()
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->string('Year')->nullable()->change();  // <-- keep it string
        });
    }

    public function down()
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->string('Year')->nullable(false)->change();
        });
    }
}
