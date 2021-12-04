<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Repository\KendaraanRepo;
use App\LogicLayers\MobilLogic;

class KendaraanController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(){
        $mobil_logic = new MobilLogic;
        $mobil = $mobil_logic->getMobil();
        return $this->mobil_output()->mobil($mobil);
    }

    private function mobil_output(){
        $mobil_output = new MobilOutput;
        return $mobil_output;
    }
}