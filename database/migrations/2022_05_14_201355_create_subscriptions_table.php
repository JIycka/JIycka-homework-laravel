<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('card_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('card_id')->references('id')->on('cards');
        });

        Schema::create('subscription_notification', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscription_id');
            $table->foreignId('notification_id');
            $table->timestamps();

            $table->foreign('subscription_id')->references('id')->on('subscriptions');
            $table->foreign('notification_id')->references('id')->on('notifications');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription_notification', function (Blueprint $table) {
            $table->dropForeign('subscription_id');
            $table->dropForeign('notification_id');
        });

        Schema::dropIfExists('subscription_notification');

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('card_id');
        });

        Schema::dropIfExists('subscriptions');
    }
}
