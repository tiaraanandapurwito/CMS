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
        Schema::create('mediapartners', function (Blueprint $table) {
            $table->id();
            $table-> string('mediapartner');
            $table-> string('image');
            $table->timestamps();
        });

        Schema::table('mediapartners', function (Blueprint $table) {
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediapartners');
        
        Schema::table('mediapartners', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
};
