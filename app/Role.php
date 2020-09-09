<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'tb_role';

	protected $fillable = ['name'];

	protected $primaryKey = 'id_role';

	public $timestamps = false;

	public function users()
	{
		return $this->hasMany('App\User','id_role','id_role');
	}
}
