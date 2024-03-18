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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id')->default(0)->comment('會員ID');
            $table->string('member_name')->nullable()->comment('會員姓名');
            $table->string('member_email')->nullable()->comment('會員帳號');
            $table->string('member_password')->nullable()->comment('會員密碼');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
