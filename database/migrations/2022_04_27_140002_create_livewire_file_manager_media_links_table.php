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
        Schema::create('livewire_file_manager_media_links', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('media_id');
            $table->string('linkable_type');
            $table->unsignedBigInteger('linkable_id');
            $table->string('linkable_optional_key')->nullable();
            $table->timestamps();

            $table->foreign('media_id')
                ->references('id')
                ->on('livewire_file_manager_media')
                ->cascadeOnDelete();

            $table->index(['linkable_type', 'linkable_id'], 'lfm_media_linkable_idx');
            $table->unique(['media_id', 'linkable_type', 'linkable_id', 'linkable_optional_key'], 'lfm_media_links_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livewire_file_manager_media_links');
    }
};
