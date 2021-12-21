<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_logins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('visitor_id')->unsigned()->nullable();
            $table->string('provider', 20)->nullable();
            $table->string('social_id')->nullable();
            $table->timestamps();
        });

        Schema::table('social_logins', function ($table) {
            $table->foreign('visitor_id')->references('id')->on('visitors')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('social_logins');
    }
}
