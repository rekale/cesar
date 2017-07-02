<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_transaction', function (Blueprint $table) {
            $table->unsignedInteger('destination_id');
            $table->unsignedInteger('transaction_id');
            $table->unsignedInteger('tickets');
            $table->unsignedInteger('total')->defaut(0);

            $table->foreign('destination_id')
                  ->references('id')->on('destinations')
                  ->onDelete('cascade');
            $table->foreign('transaction_id')
                  ->references('id')->on('transactions')
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
        Schema::dropIfExists('destination_transaction');
    }
}
