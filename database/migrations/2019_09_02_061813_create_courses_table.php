<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('course_type_id')->unsigned();
            $table->foreign('course_type_id')->references('id')->on('course_types')->onDelete('cascade');
            $table->bigInteger('completion_criteria_id')->unsigned();
            $table->foreign('completion_criteria_id')->references('id')->on('completion_criterias')->onDelete('cascade');
            $table->string('title');
            $table->string('language');
            $table->string('image');
            $table->string('certificate')->nullable();
            $table->text('description');
            $table->boolean('published')->default(0);
            $table->boolean('approved')->default(0);
            $table->timestamp('expired_at');
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
        Schema::dropIfExists('courses');
    }
}
