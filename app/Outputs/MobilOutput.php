<?php

namespace App\Outputs;

class MobilOutput extends Output
{
    public function mobil($datas){
        foreach($datas as $data){
            $id = $data->id;
            $name = $data->name;
            $type = $data->type;

            $data = [
                'id'   => $id,
                'name' => $name,
                'type' => $type,
            ];
            array_push($this->arrayOutput, $data);
        }
        return $this->output($this->arrayOutput, 'success');
    }
}