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
        Schema::create('banner1s', function (Blueprint $table) {
            $table->id();
            $table->string('bg_color')->nullable();
            $table->longText('image_path')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('content')->nullable();
            $table->text('container_color')->nullable();
            $table->string('sub_content')->nullable();
            $table->string('sub_content_color')->nullable();
            $table->longText('hero_image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner1s');
    }
};
