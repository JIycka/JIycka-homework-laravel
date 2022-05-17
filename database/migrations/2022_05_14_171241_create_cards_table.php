<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('column_id');
            $table->foreignId('author_id');
            $table->foreignId('executor_id');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('executor_id')->references('id')->on('users');
            $table->foreign('column_id')->references('id')->on('columns');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropForeign('author_id');
            $table->dropForeign('executor_id');
            $table->dropForeign('column_id');
        });

        Schema::dropIfExists('cards');
    }
}
