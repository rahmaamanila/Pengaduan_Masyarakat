<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $fillable = ['id_pengaduan', 'tgl_tanggapan', 'tanggapan', 'id_petugas'];
    protected $primaryKey = 'id_tanggapan';
}
