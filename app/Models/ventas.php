<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

    public function Clientes(){
    return $this->belongsTo(Clientes::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function comprobante(){
        return $this->belongsTo(comprobante::class);
    }

    public function productos(){
     return $this->belongsToMany(Producto::class)->withtimestamps()->withPivot('cantidad','precio_compra','descuento');
    }

}

