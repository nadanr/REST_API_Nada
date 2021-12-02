<?php

namespace App\Http\LogicLayers;
use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;


class MobilLogic 
{
    public function indexMobil(){
        $mobil=Mobil::all();
        return $mobil;
    }
}