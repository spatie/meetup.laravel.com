<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->timestamp('held_at');
            $table->string('youtube_url')->nullable();

            $table->string('speaker_1_name');
            $table->string('speaker_1_title');
            $table->string('speaker_1_talk_title');
            $table->string('speaker_1_talk_abstract');
            $table->string('speaker_1_photo');

            $table->string('speaker_2_name');
            $table->string('speaker_2_title');
            $table->string('speaker_2_talk_title');
            $table->string('speaker_2_talk_abstract');
            $table->string('speaker_2_photo');

            $table->timestamps();
        });
    }
}
