<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;

    public function Persona(){
    return $this->belongsto(Persona::class);
    }

    public function compras(){
        return $this->hasMany(compras::class);

   }
}