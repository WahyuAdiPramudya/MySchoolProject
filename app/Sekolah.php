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
    	return $this->hasMany('App\User','id');  
    }
}
