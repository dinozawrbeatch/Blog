<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_to_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comment_id');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();

            $table->index('post_id', 'ctp_post_id_idx');
            $table->index('comment_id', 'ctp_comment_id_idx');

            $table->foreign('post_id', 'ctp_post_id_fk')->references('id')->on('posts');
            $table->foreign('comment_id', 'ctp_comment_id_fk')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_to_post');
    }
};
