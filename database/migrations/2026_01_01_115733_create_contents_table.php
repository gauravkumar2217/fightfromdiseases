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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('page_slug'); // e.g., 'home', 'about', 'contact'
            $table->string('key'); // e.g., 'hero_title', 'mission_text'
            $table->text('value')->nullable();
            $table->string('type')->default('text'); // text, textarea, html, etc.
            $table->string('group')->default('general'); // hero, about, services, etc.
            $table->text('description')->nullable(); // Description of where this content appears
            $table->integer('display_order')->default(0); // Order on the page
            $table->timestamps();
            
            // Unique constraint: same page_slug and key combination should be unique
            $table->unique(['page_slug', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
