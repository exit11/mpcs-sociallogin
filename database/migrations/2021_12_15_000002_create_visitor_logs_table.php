<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('visitor_id')->unsigned()->nullable();
            $table->string('path');
            $table->string('method', 10);
            $table->string('ip');
            $table->LongText('input');
            $table->timestamp('created_at');
        });

        Schema::table('visitor_logs', function ($table) {
            $table->index('visitor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitor_logs');
    }
}
