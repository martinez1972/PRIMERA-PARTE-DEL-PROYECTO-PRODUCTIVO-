<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
    use HasFactory;

    public function proveedores(){
        return $this->belongsTo(proveedores::class);
    }

    public function comprobante(){
        return $this->belongsTo(comprobante::class);
    }

    public function productos(){
     return $this->belongsToMany(Producto::class)->withtimestamps()->withPivot('cantidad','precio_compra','precio_venta');
    }
}