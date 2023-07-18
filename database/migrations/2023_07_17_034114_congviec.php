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
        //
        Schema::create('cong_viec', function (Blueprint $table){
            $table->id();
            $table->string('dich_vu');
            $table->unsignedBigInteger('nhom_id');
            $table->unsignedBigInteger('nhan_vien_id');
            $table->integer('uu_tien');
            $table->integer('lap_lai');
            $table->string('chu_thich');
            $table->string('file');
            $table->integer('phan_tram_hoan_thanh');
            $table->boolean('trang_thai');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('congviec');
    }
};
