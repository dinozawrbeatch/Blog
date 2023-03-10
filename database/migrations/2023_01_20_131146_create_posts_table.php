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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->smallInteger('status')->default('1');
            $table->unsignedBigInteger('author_id')->nullable();
            $table->string('tag_ids')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('author_id', 'author_id_idx');

            $table->foreign('author_id', 'author_id_fk')->references('id')->on('users');
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
};
