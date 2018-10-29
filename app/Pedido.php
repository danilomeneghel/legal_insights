<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_edicao';

    public function tipopedido()
    {
        return $this->hasOne('App\Tipopedido', 'id', 'id_tipo_pedido');
    }

}
