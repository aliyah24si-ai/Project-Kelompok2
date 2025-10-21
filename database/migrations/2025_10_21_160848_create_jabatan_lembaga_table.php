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
    Schema::create('jabatan_lembaga', function (Blueprint $table) {
        $table->increments('jabatan_id'); //jabatan_id (PK)
        $table->string('lembaga_id', 100)->unique(); //lembaga_id (UNQ)
        $table->string('nama_jabatan', 100);
        $table->string('level');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatan_lembaga');
    }
};
