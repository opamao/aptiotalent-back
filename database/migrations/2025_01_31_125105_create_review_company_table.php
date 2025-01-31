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
        Schema::create('review_company', function (Blueprint $table) {
            $table->uuid('idreview')->primary();
            $table->integer('note');
            $table->uuid('candidat_id');
            $table->foreign('candidat_id')->references('idcandidat')->on('candidates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_company');
        Schema::table('review_company', function (Blueprint $table) {
            $table->dropForeign([
                'candidat_id',
            ]);
            $table->dropColumn('candidat_id');
        });
    }
};
