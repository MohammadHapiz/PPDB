<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswa2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa2', function (Blueprint $table) {
            $table->id();
            $table->string('nis',100);
            $table->string('nama',100);
            $table->string('jenis_kelamin',100);
            $table->string('temp_lahir',100);
            $table->date('tgl_lahir');
            $table->string('alamat',100);
            $table->string('asal_sekolah',100);
            $table->string('kelas',100);
            $table->string ('jurusan',100);
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
        Schema::dropIfExists('siswaa2');
    }
}
