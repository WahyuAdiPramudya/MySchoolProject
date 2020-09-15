<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
 
    protected $table = 'tb_siswa';

    protected $primaryKey ='nisn';

    protected $fillable = [
                        'nisn',
    					'nama',
    					'jenkel',
    					'agama',
    					'kelas_id',
    					'nama_ayah',
    					'nama_ibu',
    					'tanggal_lahir',
    					'alamat',
    					'image_siswa',
    				];

    protected $dates = ['tanggal_lahir'];                

    public $timestamps = false;
    
    public function user(){
    	return $this->belongsTo('App\User');
    }	


    public function kelas(){
        return $this->belongsTo('App\Kelas','kelas_id','id');
    }			

}
