<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public function Documento(){
        return $this->belongsTo(Documento::class);
    }

    public function Proveedores(){
        return $this->hasone(Proveedores::class);
    }

    public function Clientes(){
        return $this->hasone(Clientes::class);
    }
}