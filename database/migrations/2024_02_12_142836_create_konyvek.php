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
        Schema::create('konyvek', function (Blueprint $table) {
            $table->id("k_id");
            $table->string("szerzo",200);
            $table->string("cim",200);
            $table->string("isbn",100);
            $table->year('kiadasi_ev');
            $table->integer("oldalak_szama");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konyvek');
    }
};
