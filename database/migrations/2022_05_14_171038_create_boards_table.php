<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('author_id');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users');
        });

        Schema::create('board_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('board_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('board_id')->references('id')->on('boards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('board_user', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('board_id');
        });

        Schema::dropIfExists('board_user');

        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('author_id');
        });

        Schema::dropIfExists('boards');
    }
}
