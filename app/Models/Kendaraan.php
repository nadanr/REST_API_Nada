<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Motor;
use App\Models\Mobil;

class Kendaraan extends Model
{
    // use HasFactory;
    private string $tahun;
    private string $warna;
    private string $harga;

    function __construct(string $tahun, string $warna, string $harga)
    {
        $this->tahun = $tahun;
        $this->warna = $warna;
        $this->harga = $harga;
        print "In BaseClass constructor\n";
    }

    public function getName(){
        return $this->name;
    }

    public function getMotors(){
        return $this->hasMany(Motor::class, 'foreign_key');
    }

    public function getMobils(){
        return $this->hasMany(Mobil::class, 'foreign_key');
    }
}
