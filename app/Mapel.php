<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{

    protected $table = 'tb_mapel';

    protected $primaryKey = 'id';

    protected $fillable = ['mapel','user_id','sekolah_id'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function sekolah(){
    	return $this->hasMany('App\	Sekolah','id_sekolah');
    }

	// RELATION TABLE
	public function Nilai(){
		return $this->belongsToMany('App\Nilai','id_mapel','id_mapel');
	}

}
