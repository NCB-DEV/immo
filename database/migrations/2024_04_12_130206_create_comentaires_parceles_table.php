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
        Schema::create('comentaires_parceles', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("postnom");
            $table->unsignedBigInteger("idpaecelle");
            $table->foreign("idpaecelle")->references('id')->on("parceles");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentaires_parceles');
    }
};
