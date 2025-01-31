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
        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid('idjob')->primary();
            $table->uuid('entreprise_id');
            $table->foreign('entreprise_id')->references('id')->on('users');
            $table->uuid('jobcategorie_id');
            $table->foreign('jobcategorie_id')->references('idjob_categorie')->on('job_categorie');
            $table->uuid('jobtype_id');
            $table->foreign('jobtype_id')->references('idjob_type')->on('job_type');
            $table->uuid('joblevel_id');
            $table->foreign('joblevel_id')->references('idjob_level')->on('job_level');
            $table->uuid('jobexperience_id');
            $table->foreign('jobexperience_id')->references('idjob_experience')->on('job_experience');
            $table->uuid('jobqualification_id');
            $table->foreign('jobqualification_id')->references('idjob_qualification')->on('job_qualification');
            $table->string('libelle');
            $table->longText('description');
            $table->string('salaire_min')->nullable();
            $table->string('salaire_max')->nullable();
            $table->date('date_expire');
            $table->string('adresse')->comment('plus de details sur le lieux du boulot');
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign([
                'entreprise_id',
                'jobcategorie_id',
                'jobtype_id',
                'joblevel_id',
                'jobexperience_id',
                'jobqualification_id'
            ]);
            $table->dropColumn('entreprise_id');
            $table->dropColumn('jobcategorie_id');
            $table->dropColumn('jobtype_id');
            $table->dropColumn('joblevel_id');
            $table->dropColumn('jobexperience_id');
            $table->dropColumn('jobqualification_id');
        });
    }
};
