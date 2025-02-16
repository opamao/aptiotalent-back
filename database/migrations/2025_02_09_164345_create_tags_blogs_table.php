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
        Schema::create('tags_blogs', function (Blueprint $table) {
            $table->uuid('idtag_blog')->primary();
            $table->string('libelle_tag');
            $table->string('status_tag', 50)->default('active')->comment('active, inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags_blogs');
    }
};
