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
            $table->string('name', 50);
            $table->string('username', 50)->unique();
            $table->string('email', 50)->unique();
            $table->string('sex', 10);
            $table->date('birthday');
            $table->bigInteger('nik');
            $table->text('address');
            $table->string('city', 50);
            $table->mediumInteger('pos_code');
            $table->string('phone', 50);
            $table->string('no_rek', 20);
            $table->string('name_rek', 50);
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
