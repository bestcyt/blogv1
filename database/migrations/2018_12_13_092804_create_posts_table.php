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
            $table->integer('labelIds')->comment('多个标签id');
            $table->integer('userId')->comment('用户作者id');
            $table->integer('sortId')->comment('分类id');
            $table->integer('image')->comment('列表图片')->nullable(true);
            $table->string('title', 20)->nullable()->comment('文章标题');
            $table->string('desc')->comment('文章描述');
            $table->text('info')->comment('文章内容');
            $table->integer('wordCount')->comment('字数')->default(1);
            $table->integer('pageViewCount')->comment('浏览量')->default(1);
            $table->integer('commentCount')->comment('评论数')->default(0);
            $table->integer('likeCount')->comment('点赞数量')->default(0);
            $table->integer('isComment')->comment('是否允许评论,1为允许，2为不允许')->default(2);
            $table->tinyInteger('isTop')->comment('是否置顶，1置顶，2不置顶')->default(2);
            $table->text('status')->comment('文章状态，1发布，2隐藏，-1删除');
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
        Schema::dropIfExists('posts');
    }
}
