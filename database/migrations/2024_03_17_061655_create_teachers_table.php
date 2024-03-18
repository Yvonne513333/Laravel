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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('teachers_id')->default(0)->comment('教師ID');
            $table->string('teachers_name')->nullable()->comment('教師姓名');
            $table->string('teachers_email')->nullable()->comment('教師帳號');
            $table->string('teachers_password')->nullable()->comment('教師密碼');
            $table->string('teachers_describe')->nullable()->comment('教師簡介');
            $table->integer('teachers_courses_id')->default(0)->nullable()->comment('教師課表ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
