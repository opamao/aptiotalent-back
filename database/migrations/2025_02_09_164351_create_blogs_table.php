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
        Schema::create('blogs', function (Blueprint $table) {
            $table->uuid('idblog')->primary();
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('tag_id')->nullable();
            $table->foreign('tag_id')->references('idtag_blog')->on('tags_blogs');
            $table->uuid('categorie_id')->nullable();
            $table->foreign('categorie_id')->references('idcategorie_blog')->on('categories_blogs');
            $table->text('libelle_blog');
            $table->longText('description_blog');
            $table->string('image_blog');
            $table->string('status_blog', 50)->default('unpublish')->comment('unpublish, publish');
            $table->integer('like_blog')->default(0);
            $table->integer('share_blog')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign(['user_id', 'tag_id', 'categorie_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('tag_id');
            $table->dropColumn('categorie_id');
        });
    }
};
