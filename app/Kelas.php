<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
<<<<<<< HEAD
    
=======
    protected $table = 'tb_kelas';

	protected $fillable = ['id_kelas','nama_kelas','id_sekolah'];

	protected $primaryKey = 'id_kelas';

	public $timestamps = false;

	// RELATION TABLE
	public function Absen(){
		return $this->belongsTo('App\Absensi','id_kelas','id_kelas');
	}

	public function Siswa(){
		return $this->belongsTo('App\Siswa','id_kelas','id_kelas');
	}
>>>>>>> develop
}
