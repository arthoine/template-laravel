<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->json('site_logo')->nullable();
            $table->longText('scripts_head')->nullable();
            $table->longText('scripts_body')->nullable();
            $table->string('google_verification')->nullable();
            $table->timestamps();
        });

        // Insert the first row in the database
        DB::table('site_settings')->insert([
            'id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
