<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'tb_sekolah';

   	protected $primaryKey = 'id_sekolah';

    protected $fillable = ['nis','nama_sekolah','kepala_sekolah','no_telp','alamat_sekolah','logo'];

    public $timestamps = false ;

    public function user(){
    	return $this->hasMany('App\User','id_sekolah','id');  
    }

    public function kelas(){
    	return $this->hasMany('App\kelas');
    }
     public function mapel(){
        return $this->hasMany('App\Mapel','sekolah_id','id_mapel');
    }
}
