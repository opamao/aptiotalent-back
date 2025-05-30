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
        Schema::create('enquete_company', function (Blueprint $table) {
            $table->uuid('idenquete')->primary();
            $table->string('question');
            $table->text('reponse');
            $table->uuid('entreprise_id')->nullable();
            $table->foreign('entreprise_id')->references('idcompany')->on('company');
            $table->uuid('candidat_id')->nullable();
            $table->foreign('candidat_id')->references('idcandidat')->on('candidates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquete_company');
        Schema::table('enquete_company', function (Blueprint $table) {
            $table->dropForeign([
                'candidat_id',
                'entreprise_id',
            ]);
            $table->dropColumn('candidat_id');
            $table->dropColumn('entreprise_id');
        });
    }
};
