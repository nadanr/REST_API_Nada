<?php

namespace App\Http\LogicLayers;
use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;


class MotorLogic 
{
    public function indexMotor(){
        $motor=Motor::all();
        return $motor;
    }
}