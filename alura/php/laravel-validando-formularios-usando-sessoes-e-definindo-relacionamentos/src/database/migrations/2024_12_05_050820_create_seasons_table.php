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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('numero');
            $table->foreignId('series_id')->constrained();
            $table->timestamps();

            // essas duas linhas fazem a mesma coisa que a foreignId só que um pouco mais verboso
            // $table->unsignedBigInteger('series_id');
            // $table->foreign('series_id')->references('id')->on('series');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};
