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
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',255);
            $table->string('logo',512);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('manufacturer_id')->constrained();
            $table->string('color',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('manufacturer_id');
            $table->dropColumn('color');
        });
    }
};
