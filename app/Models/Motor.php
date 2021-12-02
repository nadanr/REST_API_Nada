<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Motor extends Kendaraan
{
    // use HasFactory;
    private string $mesin;
    private string $tipe_suspensi;
    private string $tipe_transmisi;

    function __construct(string $tahun, string $warna, string $harga, string $mesin, string $tipe_suspensi, string $tipe_transmisi)
    {
        parent::__construct(
            $tahun,
            $warna,
            $harga
        );
        $this->mesin = $mesin;
        $this->tipe_suspensi = $tipe_suspensi;
        $this->tipe_transmisi = $tipe_transmisi;

    }
    public function getName(){
        return $this->name;
    }
}
