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
        Schema::create('commande_parceles', function (Blueprint $table) {
            $table->id();
            $table->string("prix");
            $table->unsignedBigInteger("id_proprietaire");
            $table->unsignedBigInteger("id_paecelle");
            $table->string("status");
            $table->foreign("id_proprietaire")->references('id')->on("proprietaires");
            $table->foreign("id_paecelle")->references('id')->on("parceles");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_parceles');
    }
};
