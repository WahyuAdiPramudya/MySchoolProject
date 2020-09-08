<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $table = "tb_siswa";

    protected $primaryKey = "nisn";
}
