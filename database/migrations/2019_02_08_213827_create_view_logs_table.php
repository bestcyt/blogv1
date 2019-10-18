<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewLogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip')->comment('来源ip');
            $table->string('info')->comment('来源信息，根据ip');
            $table->string('viewPath')->comment('看的啥');
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
        Schema::dropIfExists('view_logs');
    }
}
