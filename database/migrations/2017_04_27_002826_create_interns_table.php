<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 255);
            $table->string('middlename', 255);
            $table->string('lastname', 255);
            $table->string('phone', 20);
            $table->string('twitter', 200);
            $table->enum('gender', ['male', 'female']);
            $table->string('state', 250);
            $table->string('lg', 250);
            $table->string('password', 256);
            $table->text('bio');
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
        Schema::table('interns', function (Blueprint $table) {
            Schema::drop('interns');
        });
    }
}
