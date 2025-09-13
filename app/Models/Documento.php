<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
   use HasFactory;

  public function Persona(){
    return $this->hasone(Persona::class); 
   }
}
