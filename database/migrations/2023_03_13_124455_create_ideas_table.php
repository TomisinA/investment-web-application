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
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('abstract');
            $table->text('content');
            $table->date('expiry_date');
            $table->timestamps();

            $table->unsignedBigInteger('major_sector_id');
            $table->foreign('major_sector_id')
                  ->references('id')
                  ->on('sectors')
                  ->constrained();

            $table->unsignedBigInteger('minor_sector_id');
            $table->foreign('minor_sector_id')
                  ->references('id')
                  ->on('sectors')
                  ->constrained();

            $table->unsignedBigInteger('risk_rating_id');
            $table->foreign('risk_rating_id')
                  ->references('id')
                  ->on('risk_ratings')
                  ->constrained();

            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')
                  ->references('id')
                  ->on('regions')
                  ->constrained();

            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries')
                  ->constrained();

            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')
                  ->references('id')
                  ->on('currencies')
                  ->constrained();

            $table->unsignedBigInteger('creator_id');
            $table->foreign('creator_id')
                  ->references('id')
                  ->on('users')
                  ->constrained()
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideas');
    }
};
