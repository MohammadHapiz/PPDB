<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa2 extends Model
{
    protected $table = "pegawai";
    protected $primarykey = "id";
    protected $fillable[
    	'id','nama','nis','Jenis_kelamin','Temp_lahir','Tgl_lahir','Alamat','Asal_Sekolah','Kelas'];
}
