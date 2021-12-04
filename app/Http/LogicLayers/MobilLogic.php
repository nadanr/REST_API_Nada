<?php

namespace App\Http\LogicLayers;
use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;


class MobilLogic 
{
    public function getMobil(){
        $mobil=Mobil::all();
        return $mobil;
    }

    public function destroy($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return "book with id " . $id . " deleted";
    }
}