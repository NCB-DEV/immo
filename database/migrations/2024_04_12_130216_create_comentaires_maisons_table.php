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
        Schema::create('comentaires_maisons', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("postnom");
            $table->unsignedBigInteger("idpro");
            $table->foreign("idpro")->references('id')->on("proprietes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentaires_maisons');
    }
};
