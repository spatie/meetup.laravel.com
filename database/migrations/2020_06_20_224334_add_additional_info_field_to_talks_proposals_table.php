<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalInfoFieldToTalksProposalsTable extends Migration
{
    public function up()
    {
        Schema::table('talk_proposals', function (Blueprint $table) {
            $table->text('additional_info')->nullable();
        });
    }
}
