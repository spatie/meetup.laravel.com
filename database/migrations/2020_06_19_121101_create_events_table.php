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

            $table->timestamp('held_at')->nullable();
            $table->string('youtube_url')->nullable();

            $table->string('speaker_1_name')->nullable();
            $table->string('speaker_1_title')->nullable();
            $table->string('speaker_1_talk_title')->nullable();
            $table->string('speaker_1_talk_abstract')->nullable();
            $table->string('speaker_1_photo')->nullable();

            $table->string('speaker_2_name')->nullable();
            $table->string('speaker_2_title')->nullable();
            $table->string('speaker_2_talk_title')->nullable();
            $table->string('speaker_2_talk_abstract')->nullable();
            $table->string('speaker_2_photo')->nullable();

            $table->timestamps();
        });
    }
}
