<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalkProposalsTable extends Migration
{
    public function up()
    {
        Schema::create('talk_proposals', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('title');
            $table->integer('length');
            $table->text('abstract');

            $table->timestamps();
        });
    }
}
