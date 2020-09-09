<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
     protected $table = 'tb_mapel';

	protected $fillable = ['id_mapel','mapel'];

	protected $primaryKey = 'id_mapel';

	public $timestamps = false;

	// RELATION TABLE
	public function Nilai(){
		return $this->belongsToMany('App\Nilai','id_mapel','id_mapel');
	}
}
