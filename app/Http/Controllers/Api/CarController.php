<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Repository\CarRepo;

class CarController extends Controller
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