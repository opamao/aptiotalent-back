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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->uuid('idcandidature')->primary();
            $table->uuid('candidat_id');
            $table->foreign('candidat_id')->references('idcandidat')->on('candidates');
            $table->uuid('job_id');
            $table->foreign('job_id')->references('idjob')->on('jobs');
            $table->longText('notes')->nullable();
            $table->string('status_cadidature')->comment('envoye, recu, programme, interview, embauche');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
        Schema::table('candidatures', function (Blueprint $table) {
            $table->dropForeign([
                'candidat_id',
                'job_id',
            ]);
            $table->dropColumn('candidat_id');
            $table->dropColumn('job_id');
        });
    }
};
