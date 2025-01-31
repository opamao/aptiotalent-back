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
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->uuid('idrole_permission')->primary();
            $table->uuid('role_id');
            $table->foreign('role_id')->references('idrole')->on('roles')->onDelete('cascade');
            $table->uuid('permission_id');
            $table->foreign('permission_id')->references('idpermission')->on('permissions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_permissions');
        Schema::table('roles_permissions', function (Blueprint $table) {
            $table->dropForeign(['role_id', 'permission_id']);
            $table->dropColumn('role_id');
            $table->dropColumn('permission_id');
        });
    }
};
