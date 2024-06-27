<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('page_manager_pages', function (Blueprint $table) {
            $table->json('visual')->nullable()->after('template');
        });
    }

    public function down(): void
    {
        Schema::table('page_manager_pages', function (Blueprint $table) {
            $table->dropColumn('visual');
        });
    }
};
