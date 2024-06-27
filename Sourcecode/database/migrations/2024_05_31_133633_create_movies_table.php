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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->decimal('rating', 3, 1)->nullable();
            $table->string('production');
            $table->string('director');
            $table->date('release_date');
            $table->string('age_restriction');
            $table->integer('duration');
            $table->text('synopsis');
            $table->enum('status', ['available', 'unavailable', 'coming_soon']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
