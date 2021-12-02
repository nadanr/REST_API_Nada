<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Mobil extends Kendaraan
{
    // use HasFactory;
    private string $mesin;
    private string $kapasitas;
    private string $tipe;

    function __construct(string $tahun, string $warna, string $harga, string $mesin, string $kapasitas, string $tipe)
    {
        parent::__construct(
            $tahun,
            $warna,
            $harga
        );
        $this->mesin = $mesin;
        $this->kapasitas = $kapasitas;
        $this->tipe = $tipe;

    }
    public function getName(){
        return $this->name;
    }
}
