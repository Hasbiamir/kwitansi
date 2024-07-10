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
    Schema::create('kwitansis', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal');
        $table->string('no_kwitansi');
        $table->string('sudah_terima_dari');
        $table->string('nama_peminjam');
        $table->string('untuk_pembayaran');
        $table->decimal('jumlah_uang', 15, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kwitansis');
    }
};
