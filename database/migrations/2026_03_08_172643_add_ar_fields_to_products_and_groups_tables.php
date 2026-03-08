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
        // Add Arabic fields to groups
        Schema::table('groups', function (Blueprint $table) {
            $table->string('ar_name')->nullable()->after('name');
        });

        // Add Arabic fields to products
        Schema::table('products', function (Blueprint $table) {
            $table->string('ar_name')->nullable()->after('name');
            $table->text('ar_description')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->dropColumn('ar_name');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['ar_name', 'ar_description']);
        });
    }
};
