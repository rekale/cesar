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
            $table->string('name', 30);
            $table->string('username', 30)->unique();
            $table->string('email', 30)->unique();
            $table->string('sex', 5);
            $table->date('birthday');
            $table->bigInteger('nik');
            $table->text('address');
            $table->string('city', 15);
            $table->mediumInteger('pos_code');
            $table->string('phone', 15);
            $table->string('no_rek', 15);
            $table->string('name_rek', 30);
            $table->string('password', 100);
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
