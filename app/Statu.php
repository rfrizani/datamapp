<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    //
    protected $fillable = ['id_cliente','porcentagem','pontuacao','observacao'];
    public $timestamps = false;
}
