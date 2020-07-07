<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actors', function (Blueprint $table) {
            $table->text('bio')->nullable()->after('lastname');
            $table->renameColumn('name', 'firstname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actors', function (Blueprint $table) {
            $table->renameColumn('firstname', 'name');
            $table->dropColumn('bio');
        });
    }
}
