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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('lesson_id')->default(0)->comment('lessonID');
            $table->string('lesson_name')->nullable()->comment('課堂名稱');
            $table->string('lesson_describe')->nullable()->comment('課堂描述');
            $table->string('lesson_picture')->nullable()->comment('課堂照片');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
