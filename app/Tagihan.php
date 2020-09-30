<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    public $table ="tb_tagihan";

    public $primaryKey = "id_tagihan";

    public $fillable = ['title','descript','tanggal_deadline','jumlah_bayar','id_siswa','id_user','created_at','update_at'];
}
