<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $fillable = ['tgl_pengaduan', 'nik', 'isi_laporan', 'foto'];
    protected $primaryKey = 'id_pengaduan';

    public function masyarakat(){
        return $this->belongsTo('App\Masyarakat', 'nik', 'nik');
    }
}
