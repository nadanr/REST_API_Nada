<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Car
{
    // use HasFactory;
    private string $name;
    private string $type;
    public function __construct(string $name, string $type){
        $this->name=$name;
        $this->type=$type;
    }

    public function getName(){
        return $this->name;
    }
}
