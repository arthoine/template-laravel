<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livewire_file_manager_media', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alt')->nullable();
            $table->string('description')->nullable();
            $table->string('credit')->nullable();
            $table->string('path');
            $table->unsignedBigInteger('folder_id')->nullable();
            $table->unsignedBigInteger('size');
            $table->unsignedBigInteger('width')->nullable();
            $table->unsignedBigInteger('height')->nullable();
            $table->string('extension');
            $table->string('mime');
            $table->timestamps();

            $table->foreign('folder_id')
                ->references('id')
                ->on('livewire_file_manager_folders')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livewire_file_manager_media');
    }
};
