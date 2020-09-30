<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table ="tb_jadwal";
    protected $primaryKey ="id_jadwal";
    protected $fillable = ['nama_jadwal','file_jadwal','id_user','id_kelas'];


}
