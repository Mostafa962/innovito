<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->addColumn('bigInteger', 'department_id')->unsigned()->after('id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->addColumn('bigInteger', 'branch_id')->unsigned()->after('department_id');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->addColumn('text', 'image')->after('remember_token')->nullable();
            $table->addColumn('integer', 'score')->after('remember_token')->default(0);
            $table->string('username')->after('branch_id')->nullable();
            $table->string('username_slug')->after('username')->nullable();
            $table->text('bio')->after('username_slug')->nullable();
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
            $table->dropForeign('users_department_id_foreign');
            $table->dropForeign('users_branch_id_foreign');
            $table->dropColumn('department_id');
            $table->dropColumn('branch_id');
            $table->dropColumn('image');
            $table->dropColumn('score');
            $table->dropColumn('username');
            $table->dropColumn('username_slug');
            $table->dropColumn('bio');
        });
    }
}
