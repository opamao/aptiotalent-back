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
        Schema::create('comments_blogs', function (Blueprint $table) {
            $table->uuid('idcomment_blog')->primary();
            $table->integer('review');
            $table->longText('comment');
            $table->string('status_comment', 50)->default('unpublish')->comment('unpublish, publish');
            $table->uuid('blog_id')->nullable();
            $table->foreign('blog_id')->references('idblog')->on('blogs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_blogs');
        Schema::table('comments_blogs', function (Blueprint $table) {
            $table->dropForeign(['blog_id']);
            $table->dropColumn('blog_id');
        });
    }
};
