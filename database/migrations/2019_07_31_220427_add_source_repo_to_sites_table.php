<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSourceRepoToSitesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('source_branch')->nullable()->after('source_repo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->dropColumn('source_branch');
        });
    }
}
