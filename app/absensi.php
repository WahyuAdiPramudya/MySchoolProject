<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'tb_absensi';

    protected $primaryKey = 'id_absen';

    protected $fillable = [
    				'nisn',
    				'kelas_id',
    				'user_id',
    				'status',
    				'masuk',
    				'sekolah_id'
    ];

    public $timestamps = false;

    public function getKelas(){
    	return $this->hasOne('App\Kelas','id_kelas','id_kelas');
    }

    public function getSiswa(){
    	return $this->hasOne('App\Siswa','id_siswa','id_siswa');
    }

    public function getGuru(){
    	return $this->hasOne('App\Guru');
    }

    public function getSekolah(){
    	return $this->hasOne('App\Sekolah');
    }
}
