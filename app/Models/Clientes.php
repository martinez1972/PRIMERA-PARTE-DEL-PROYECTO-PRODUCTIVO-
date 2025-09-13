<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    public function persona(){
        return $this->belongsTo(persona::class);
    }

    public function ventas(){
        return $this->hasmany(ventas::class);    
    }

}