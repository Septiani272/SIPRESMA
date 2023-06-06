<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateprestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('user_npm');
            $table->string('user_name');
            $table->string('user_prodi');
            $table->string('dospem')->nullable();
            $table->bigInteger('nip')->nullable();
            $table->string('nama_kegiatan');
            $table->enum('prestasi_yg_dicapai',['Juara I','Juara II', 'Juara III','Harapan I','Harapan II','Harapan III']);
            $table->YEAR('waktu_perolehan');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->enum('tingkat',['Tingkat Internasional','Tingkat Nasional', 'Tingkat Regional' ,'Tingkat Universitas','Tingkat Provinsi','Tingkat Kota']);
            $table->integer('jumlah_PT')->nullable();
            $table->integer('jumlah_peserta')->nullable();
            $table->string('bukti');
            $table->enum('diperoleh',['TIM','Perorangan']);
            $table->string('status')->default('Belum di Proses');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasis');
    }
}
