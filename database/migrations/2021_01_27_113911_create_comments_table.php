<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->string('comment_text');
            $table->timestamps();
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')
            ->references('author_id')
            ->on('authors');
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')
            ->references('post_id')
            ->on('posts');
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
}
