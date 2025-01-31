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
        Schema::create('gallerie_company', function (Blueprint $table) {
            $table->uuid('idgallerie');
            $table->uuid('entreprise_id')->nullable();
            $table->foreign('entreprise_id')->references('id')->on('users');
            $table->string('gallerie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallerie_company');
        Schema::table('gallerie_company', function (Blueprint $table) {
            $table->dropForeign([
                'entreprise_id',
            ]);
            $table->dropColumn('entreprise_id');
        });
    }
};
