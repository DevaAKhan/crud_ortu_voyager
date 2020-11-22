<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawai";

    protected $fillable = ['materi_pertemuan','tgl_pertemuan','jumlah_hadir','bukti'];
}
