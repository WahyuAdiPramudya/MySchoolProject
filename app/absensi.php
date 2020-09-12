<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    protected $table = 'tb_absensi';

    protected $primaryKey = 'id_absen';

    protected $fillable = [
    				'nisn',
    				'kelas_id',
    				'user_id',
    				'status',
    				'masuk',
    				'sekolah_id'
    ];

    public $timestamps = false;

}
