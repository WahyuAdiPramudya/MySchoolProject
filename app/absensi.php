<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';

    protected $fillable = ['id_absen','id_siswa','id_kelas','status','id_user','id_sekolah'];

    protected $primaryKey = 'id_absen';

    public $timestamps = false;

    // RELATION TABLE
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
