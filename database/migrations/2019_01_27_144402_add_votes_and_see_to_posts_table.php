<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesAndSeeToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('image')->comment('列表图片')->nullable(true);
            $table->integer('word_count')->comment('字数')->default(1);
            $table->integer('page_view')->comment('浏览量')->default(1);
            $table->integer('comments_num')->comment('评论数')->default(0);
            $table->integer('like_num')->comment('点赞数量')->default(0);
            $table->integer('is_comment')->comment('是否允许评论,1为允许，2为不允许')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
