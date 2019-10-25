<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    //
    protected $fillable = ['id_status','id_cliente','questao_1','questao_1_1','questao_1_2','questao_1_3','questao_1_4','questao_2',
    'questao_3','questao_4','questao_5_1','questao_5_2','questao_5_3','questao_6','questao_6_1','questao_7','questao_8_1','questao_8_2',
    'questao_8_3','questao_8_4','questao_8_5','questao_8_6','questao_8_7','questao_8_8','questao_8_9', 'questao_8_10','questao_8_11',
    'questao_9_1','questao_9_2','questao_9_3','questao_9_4','questao_9_5','questao_10_1','questao_10_2','questao_10_3','questao_10_4', 'questao_10_5'];
    public $timestamps = false;
}
