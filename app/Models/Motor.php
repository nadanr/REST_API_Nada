<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Kendaraan;

class Mobil extends Kendaraan
{
    use HasFactory;
    
    public function __construct(array $attributes=[]){
        parent::__construct($attributes);

        $this->mergeFillable(['mesin', 'tipe_suspensi'. 'tipe_transmisi']);

    }
}
