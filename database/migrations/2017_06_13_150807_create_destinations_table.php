<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('title', 15);
            $table->string('slug', 25)->index();
            $table->string('thumbnail_image');
            $table->string('abstract');
            $table->string('location');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->text('description');
            $table->unsignedInteger('tickets')->default(0);
            $table->unsignedInteger('ticket_price')->default(0);
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}
