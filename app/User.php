<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_lengkap', 'email', 'no_telp','password','status','role_id','id_sekolah','nisn_siswa',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sekolah(){
        return $this->belongsTo('App\Sekolah','id_sekolah','id_sekolah');
    }

    public function role(){
        return $this->belongsTo('App\Role','id_role','id_role');
    }
}
