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
        Schema::create('company', function (Blueprint $table) {
            $table->uuid('idcompany')->primary();
            $table->string('libelle_company');
            $table->string('fichier_registre');
            $table->string('logo')->nullable();
            $table->string('numero_registre')->unique();
            $table->string('secteur')->comment('IT Technology Solution');
            $table->string('website')->nullable();
            $table->string('creation_date');
            $table->string('revenu')->nullable();
            $table->string('email_company')->nullable()->unique();
            $table->string('phone_company')->unique();
            $table->string('fax_company')->nullable()->unique();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('skype')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->longText('description_entreprise')->nullable();
            $table->string('status_company')->comment('active, inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
