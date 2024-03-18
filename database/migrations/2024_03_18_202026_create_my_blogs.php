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
        Schema::create('my_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->unsignedBigInteger('user_id');
            $table->string('slug',100);
            $table->string('subtitle',150);
            $table->longText('body_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_blogs');
    }
};
