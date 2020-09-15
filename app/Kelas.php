<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
<<<<<<< HEAD
=======

>>>>>>> bc998d30bb96656904ac35611dc5f27ad40a88a1
    protected $table = 'tb_kelas';

    protected $primaryKey = 'id';

    protected $fillable = ['nama_kelas','sekolah_id'];

    public $timestamps = false;

    public function sekolah(){
    	return $this->belongsTo('App\Sekolah','sekolah_id','id_sekolah');
    }

    public function siswa(){
    	return $this->hasMany('App\Kelas','id');
    }
    
	// RELATION TABLE
	public function Absen(){
		return $this->belongsTo('App\Absensi','id_kelas','id_kelas');
	}

<<<<<<< HEAD
	public function Siswa(){
		return $this->belongsTo('App\Siswa','id_kelas','id_kelas');
	}
=======
>>>>>>> bc998d30bb96656904ac35611dc5f27ad40a88a1
}
