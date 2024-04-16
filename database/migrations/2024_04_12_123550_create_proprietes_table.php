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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string("prix");
            $table->string("avis");
            $table->string("photoprincipale");
            $table->string("photo2");
            $table->string("photo3");
            $table->string("photo4");
            $table->string("photo5");
            $table->string("description");
            $table->string("ville");
            $table->string("communie");
            $table->string("quartier");
            $table->unsignedBigInteger("idpro");
            $table->foreign("idpro")->references('id')->on("proprietaires");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietes');
    }
};
