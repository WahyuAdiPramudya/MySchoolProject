<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'tb_nilai';

	protected $fillable = ['id_nilai','id_siswa','id_mapel','nama_tugas','nilai','id_user','id_sekolah'];

	protected $primaryKey = 'id_nilai';

	public $timestamps = false;

	// RELATION TABLE
	public function getMapel(){
		return $this->hasMany('App\Mapel','id_mapel','id_mapel');
	}

	public function getSiswa(){
		return $this->belongsToMany('App\Siswa','id_siswa','id_siswa');
	}

	public function getUser(){
		return $this->belongsTo('App\User','id_user','id_user');
	}
}
