<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('rating');

        Schema::create('rating', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('voto');

            $table->integer('user_id')
                ->unsigned()
                ->index();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->integer('blog_posts_id')
                ->unsigned()
                ->index();
            $table->foreign('blog_posts_id')
                ->references('id')
                ->on('blog_posts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rating');
    }
}
