<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Repository\KendaraanRepo;

class KendaraanController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $repo=new CarRepo();
        // $cars=Car::all();
        $repo->get();
        $mobil=new Car("Car 1");
        dd($mobil->getName());
        return $this->response("hello","berhasil");
    }
}