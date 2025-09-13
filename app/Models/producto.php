<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    public function compras(){
        return $this->belongsToMany(compras::class)->withtimestamps()->withPivot('cantidad','precio_compra','precio_venta');
    }   

   public function ventas(){
    return $this-> belongsToMany(ventas::class)->withtimestamps()->withPivot('cantidad','precio_compra','descuento');
   }

    public function categoria(){
        return $this->belongsToMany(categoria::class)->withTimestamps();
    }

    public function marca(){
        return $this->belongsTo(marca::class);
    }

    public function presentaciones(){
        return $this->belongsTo(presentacione::class);
    }
}
