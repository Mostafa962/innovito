<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('logo_id')->unsigned()->nullable();
            $table->foreign('logo_id')->references('id')->on('media')->onDelete('cascade');
            $table->bigInteger('fav_id')->unsigned()->nullable();
            $table->foreign('fav_id')->references('id')->on('media')->onDelete('cascade');
            $table->bigInteger('default_image_employee_id')->unsigned()->nullable();
            $table->foreign('default_image_employee_id')->references('id')->on('media')->onDelete('cascade');
            $table->bigInteger('default_image_coordinator_id')->unsigned()->nullable();
            $table->foreign('default_image_coordinator_id')->references('id')->on('media')->onDelete('cascade');
            $table->string('website_title')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
