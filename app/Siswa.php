<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
     protected $table = 'tb_siswa';

    protected $fillable = ['id_siswa','nisn','nama','jenkel','agama','id_kelas','alamat','nama_ayah','nama_ibu','sekolah_id','user_id'];

    protected $primaryKey = 'id_siswa';

    public $timestamps = false;

    public function getNilai(){
		return $this->hasMany('App\Nilai','id_siswa','id_siswa');
	}
}
