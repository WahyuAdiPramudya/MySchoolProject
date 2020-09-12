<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
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
}
