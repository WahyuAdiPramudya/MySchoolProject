<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = "tb_surat";
    protected $primaryKey = "id_surat";
    protected $fillable = ['id_siswa','izin','sakit','dari_tanggal','sampai_tanggal','keterangan'];
    public $timestamps = false;

    public function siswa(){
    	return $this->belongsTo('App\Siswa','id_siswa','id_siswa');
    }
}
