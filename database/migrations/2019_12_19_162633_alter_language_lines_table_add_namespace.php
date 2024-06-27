<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterLanguageLinesTableAddNamespace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('language_lines', function (Blueprint $table) {
            $table->string('namespace')->default('*')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('language_lines', function (Blueprint $table) {
            $table->dropColumn('namespace');
        });
    }
}
