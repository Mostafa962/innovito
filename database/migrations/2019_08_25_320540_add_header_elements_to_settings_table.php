<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHeaderElementsToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->bigInteger('default_header_employee_id')->unsigned()->nullable()->after('website_title');
            $table->foreign('default_header_employee_id')->references('id')->on('media')->onDelete('cascade');
            $table->bigInteger('default_header_coordinator_id')->unsigned()->nullable()->after('website_title');
            $table->foreign('default_header_coordinator_id')->references('id')->on('media')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropForeign('settings_default_header_employee_id_foreign');
            $table->dropForeign('settings_default_header_coordinator_id_foreign');
            $table->dropColumn('default_header_employee_id');
            $table->dropColumn('default_header_coordinator_id');
        });
    }
}
