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
        Schema::create('idea_assignations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idea_id');
            $table->foreign('idea_id')
                  ->references('id')
                  ->on('ideas')
                  ->constrained()
                  ->onDelete('cascade');

            $table->unsignedBigInteger('investor_id');
            $table->foreign('investor_id')
                  ->references('id')
                  ->on('users')
                  ->constrained();

            $table->timestamps();
            $table->enum('status', array('suggested', 'accepted', 'rejected'));	

            $table->unique(['idea_id', 'investor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idea_assignations');
    }
};
