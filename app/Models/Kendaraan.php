<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Motor;
use App\Models\Mobil;

class Kendaraan extends Model
{
    // use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'kendaraan';

    protected $fillable =[
        'tahun_keluar', 'warna', 'harga', 'stok', 'jumlah_terjual', 'jenis'
    ];

    public function getMotors(){
        return $this->hasMany(Motor::class, 'foreign_key');
    }

    public function getMobils(){
        return $this->hasMany(Mobil::class, 'foreign_key');
    }
}
