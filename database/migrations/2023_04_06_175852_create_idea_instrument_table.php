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
        Schema::create('idea_instrument', function (Blueprint $table) {
            $table->unsignedBigInteger('idea_id');
            $table->foreign('idea_id')
                  ->references('id')
                  ->on('ideas')
                  ->constrained()
                  ->onDelete('cascade');

            $table->unsignedBigInteger('instrument_id');
            $table->foreign('instrument_id')
                  ->references('id')
                  ->on('instruments')
                  ->constrained();

            $table->primary(['idea_id', 'instrument_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idea_instrument');
    }
};
