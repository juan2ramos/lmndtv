<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_participant', function (Blueprint $table) {

            $table->unsignedBigInteger('lottery_id');
            $table->unsignedBigInteger('participant_id');

            $table->smallInteger('state');
            $table->smallInteger('number');
            $table->primary(['lottery_id', 'participant_id', 'number']);

            $table->foreign('lottery_id')
                ->references('id')->on('lotteries')
                ->onDelete('cascade');

            $table->foreign('participant_id')
                ->references('id')->on('participants')
                ->onDelete('cascade');
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
        Schema::dropIfExists('lottery_participants');
    }
}
