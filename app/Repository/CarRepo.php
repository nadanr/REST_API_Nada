<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Car;

class CarRepo extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'cars';
    protected $fillable = [
        'name','type'
    ];

    public function get(){
        $data=CarRepo::all()->toArray();
        $obj=new Car($data[0]["name"],$data[0]["type"]);
        dd($obj);
    }
}
