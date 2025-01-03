<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('videos', function (Blueprint $table) {
        $table->id();
        $table->string('url'); // URL embed YouTube
        $table->string('title'); // Judul video
        $table->text('description'); // Deskripsi singkat video
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
