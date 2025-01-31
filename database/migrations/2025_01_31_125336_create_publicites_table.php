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
        Schema::create('publicites', function (Blueprint $table) {
            $table->uuid('idpub')->primary();
            $table->uuid('entreprise_id')->nullable();
            $table->foreign('entreprise_id')->references('id')->on('users');
            $table->string('titre_pub')->nullable();
            $table->text('description_pub')->nullable();
            $table->string('type_pub')->comment('banniere, statut, fond, splash');
            $table->string('url_pub')->nullable();
            $table->datetime('date_debut');
            $table->datetime('date_fin');
            $table->double('prix_pub');
            $table->string('statut_pub')->comment('en pause, active, termine');
            $table->integer('vues_pub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicites');
        Schema::table('publicites', function (Blueprint $table) {
            $table->dropForeign([
                'entreprise_id',
            ]);
            $table->dropColumn('entreprise_id');
        });
    }
};
