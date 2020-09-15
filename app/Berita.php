<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'tb_berita';

    protected $fillable = ['judul','desc','tanggal_upload','image','role_id','sekolah_id'];

    protected $primaryKey ='id_berita';

    public $timestamps = false;

}
