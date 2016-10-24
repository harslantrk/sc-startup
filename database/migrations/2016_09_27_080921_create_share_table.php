<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('content');
            $table->string('ipaddress');
            $table->integer('like_count');
            $table->integer('share_count');
            $table->integer('comment_count');
            $table->integer('status');
            $table->integer('share_id');
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
        Schema::drop('share');
    }
}
