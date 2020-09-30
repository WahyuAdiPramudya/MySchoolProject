<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $table = 'tb_update';

    protected $fillable = ['title','description','image','role_id'];

    protected $primaryKey = 'id_update';

    public $timestamps = false;

}
