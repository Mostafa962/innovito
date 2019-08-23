<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonalInfoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('website')->after('remember_token')->nullable();
            $table->string('birthday')->after('remember_token')->nullable();
            $table->string('phone')->after('remember_token')->nullable();
            $table->string('country')->after('remember_token')->nullable();
            $table->string('city')->after('remember_token')->nullable();
            $table->text('little_description')->after('remember_token')->nullable();
            $table->string('birthplace')->after('remember_token')->nullable();
            $table->string('occupation')->after('remember_token')->nullable();
            $table->string('status')->after('remember_token')->nullable();
            $table->text('facebook')->after('remember_token')->nullable();
            $table->text('twitter')->after('remember_token')->nullable();
            $table->text('linkedin')->after('remember_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('website');
            $table->dropColumn('birthday');
            $table->dropColumn('phone');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('little_description');
            $table->dropColumn('birthplace');
            $table->dropColumn('occupation');
            $table->dropColumn('status');
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('linkedin');
        });
    }
}
