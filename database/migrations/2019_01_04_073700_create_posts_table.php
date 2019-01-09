<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_lapor');
            $table->dateTime('w_mulai');
            $table->dateTime('w_selesai');
            $table->dateTime('w_pakai');
            $table->string('cp');
            $table->string('product');
            $table->string('priority');
            $table->integer('status');
            $table->string('topic');
            $table->text('issue_desc');
            $table->text('prob_solv');
            $table->text('tech');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
