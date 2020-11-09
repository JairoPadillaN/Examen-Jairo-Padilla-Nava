<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_factura extends Model
{
    protected $table='detalle_factura';

    protected $fillable=[
        'num_detalle',
        'numero_factura',
        'id_producto',
        'cantidad'
    ];
}
