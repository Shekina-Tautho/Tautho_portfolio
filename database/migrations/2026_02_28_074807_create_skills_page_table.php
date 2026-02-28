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
        Schema::create('skills_page', function (Blueprint $table) {
            $table->id();
            $table->string('header1')->nullable();
            $table->string('header2')->nullable();
            $table->string('header3')->nullable();
            $table->text('description')->nullable();
            $table->string('tech');
            $table->string('tool')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills_page');
    }
};
