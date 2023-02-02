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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedSmallInteger('status');
            $table->string('author');
            $table->string('email');
            $table->string('url');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();

            $table->index('post_id', 'post_id_idx');

            $table->foreign('post_id', 'post_id_fk')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
