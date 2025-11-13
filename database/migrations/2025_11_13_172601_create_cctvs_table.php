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
        Schema::create('cctvs', function (Blueprint $table) {
            $table->id();
            $table->string('no',100);
            $table->string('nama',100);
            $table->string('lat',100);
            $table->string('lon',100);
            $table->date('tanggal');
            $table->string('jenis',3)->comment('FIX=Fixed,PTZ=Non Fixed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cctvs');
    }
};
